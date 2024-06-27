<?php

namespace Cm\Api\Service;

use Cm\Api\Service\Exception\EmailExistsException;
use Cm\Api\Service\Exception\InvalidLoginException;
use Cm\Api\Service\Exception\CanNotLoginUserException;
use Cm\Api\Validation\CustomValidation;
use Cm\Api\Validation\Exception\ValidationException;
use Cm\Api\Entity\User as UserEntity;
use Cm\Api\ORM\UserModel;
use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;
use PH7\PhpHttpResponseHeader\Http;
use PH7\JustHttp\StatusCode;
use function Cm\Api\Helpers\hashPassword;
use RedBeanPHP\RedException\SQL;


class User
{

	public function login(mixed $data)
	{
		$validation = new CustomValidation($data);
		$user_name = "";
		if ($validation->validate_login()) {
			if (UserModel::email_exists($data->email)) {
				$user = UserModel::getByEmail($data->email);
				$is_login_valid = $user->get_email() && password_verify($data->password, $user->get_password());
				if ($is_login_valid) {
					$user_name = $user->get_firstname() . " " . $user->get_lastname();
					$currentTime = time();
					$payload = [
						'iss' => $_ENV['API_URL'],
						'iat' => $currentTime,
						'exp' => $currentTime + (int)$_ENV['JWT_TOKEN_EXP'],
						'data' => [
							'email' => $user->get_email(),
							'user' => $user_name
						]
					];
					$jwt_token = JWT::encode($payload, 'this is very secret', 'HS256');
				}
				try {
					UserModel::setUserToken($jwt_token, $user->get_uuid());
				} catch (SQL $e) {
					throw new CanNotLoginUserException('can´t set session token');
				}
				return [
					'message' => sprintf(' successfully logged in', $user_name),
					'token' => $jwt_token
				];
			}
			throw new InvalidLoginException('Invalid login');
		}
		throw new ValidationException('invalid login credentials');
	}

	public function create(mixed $data): array|object
	{
		$validation = new CustomValidation($data);
		if ($validation->validate_create()) {
			$uuid = Uuid::uuid4()->toString();
			$user_entity = new UserEntity();
			$user_entity->set_uuid($uuid)
				->set_firstname($data->firstname)
				->set_lastname($data->lastname)
				->set_email($data->email)
				->set_password(hashPassword($data->password))
				->set_phone($data->phone)
				->set_created_at(date('Y-m-d H:i:s'));

			if (UserModel::email_exists($user_entity->get_email())) {
				throw new EmailExistsException(sprintf('Email %s already exists', $user_entity->get_email()));
			};

			$valid = $user_uuid = UserModel::create($user_entity);
			if (!$valid) {
				Http::setHeadersByCode(StatusCode::BAD_REQUEST);
				return [];
			}
			$data->uuid = $user_uuid;
			unset($data->password);
			return $data;
		}
		throw new ValidationException('Validation failed, wrong input data');
	}


	public function get(string $user_id): array|UserEntity
	{
		$validation = new CustomValidation($user_id);
		if ($validation->validateUuid()) {
			if ($user_bean = UserModel::getByUuid($user_id)) {
				return $user_bean;
			};
			return [];
		}
		throw new ValidationException('Validation failed, uuid not valid');
	}

	public function getAll(): array
	{
		return UserModel::getAll();
	}

	public function update(mixed $user): array|object
	{
		$validation = new CustomValidation($user);
		if ($validation->validate_update()) {
			$user_uuid = $user->uuid;
			$user_entity = new UserEntity();
			if (!empty($user->firstname)) {
				$user_entity->set_firstname($user->firstname);
			}
			if (!empty($user->lastname)) {
				$user_entity->set_lastname($user->lastname);
			}
			if (!empty($user->phone)) {
				$user_entity->set_phone($user->phone);
			}
			$valid = UserModel::update($user_uuid, $user_entity);
			if (!$valid) {
				Http::setHeadersByCode(StatusCode::NOT_FOUND);
				return [];
			}
			return $user;
		}
		throw new ValidationException('Validation failed, wrong input data');
	}

	public function remove(string $user_uuid): bool
	{
		$validation = new CustomValidation($user_uuid);
		if ($validation->validateUuid()) {
			return UserModel::remove($user_uuid);
		}

		throw new ValidationException('Validation failed, uuid not valid');
	}
}
