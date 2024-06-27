<?php

namespace Cm\Api\Routes;

use Cm\Api\Service\User;
use Cm\Api\Routes\Exception\NotAllowedException;
use Cm\Api\Service\Exception\CanNotLoginUserException;
use Cm\Api\Service\Exception\EmailExistsException;
use Cm\Api\Service\Exception\InvalidLoginException;

use function Cm\Api\Helpers\response;


$action = $_REQUEST['action'] ?? null;

enum UserAction: string
{
	case CREATE = 'create';
	case GET = 'get';
	case GET_ALL = 'get_all';
	case UPDATE = 'update';
	case REMOVE  = 'remove';
	case LOGIN = 'login';

	function getResponse(): string
	{

		$user = new User();
		$user_data = json_decode(file_get_contents('php://input'));
		$user_id = $_REQUEST['id'] ?? null;
		$response = '';

		try {
			$http_method = match ($this) {
				self::CREATE, self::LOGIN => Http::POST_METHOD,
				self::GET, self::GET_ALL => Http::GET_METHOD,
				self::REMOVE => Http::DELETE_METHOD,
				self::UPDATE => Http::PUT_METHOD
			};

			if (!Http::matchHttpRequestMethod($http_method)) {
				throw new NotAllowedException('Method not allowed');
			}

			$response = match ($this) {
				self::CREATE => $user->create($user_data),
				self::GET => $user->get($user_id),
				self::GET_ALL => $user->getAll(),
				self::UPDATE => $user->update($user_data),
				self::REMOVE => $user->remove($user_id),
				self::LOGIN => $user->login($user_data)
			};
		} catch (EmailExistsException | InvalidLoginException | CanNotLoginUserException $e) {
			response(data: [
				'errors' => [
					'message' => $e->getMessage()
				]
			]);
		}
		return json_encode($response);
	}
}

$user_action = UserAction::tryFrom($action);
if ($user_action) {
	echo $user_action->getResponse();
} else {
	require '404.routes.php';
}
