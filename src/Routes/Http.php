<?php

namespace Cm\Api\Routes;

final class Http {
	public const string POST_METHOD = 'POST';
	public const string GET_METHOD = 'GET';
	public const string PUT_METHOD = 'PUT';
	public const string DELETE_METHOD = 'DELETE';

	public static function matchHttpRequestMethod(string $http_method): bool {
		return strtolower($_SERVER['REQUEST_METHOD']) === strtolower($http_method);
	}
}
