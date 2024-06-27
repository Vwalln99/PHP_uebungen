<?php

namespace Cm\Api\Routes;
use Cm\Api\Service\Exception\EmailExistsException;
use Cm\Api\Validation\Exception\ValidationException;
use Cm\Api\Routes\Exception\NotAllowedException;
use PH7\JustHttp\StatusCode;
use function Cm\Api\Helpers\response;

$resource = $_REQUEST['resource'] ?? null;

try {
	return match($resource) {
		'user' => require 'user.routes.php',
		default => require '404.routes.php'
	};
}catch (ValidationException | NotAllowedException $e){
	\PH7\PhpHttpResponseHeader\Http::setHeadersByCode(StatusCode::BAD_REQUEST);
	response( data: [
		'errors' => [
			'message' => $e->getMessage(),
			'code' => $e->getCode()
		]
	]);
}



