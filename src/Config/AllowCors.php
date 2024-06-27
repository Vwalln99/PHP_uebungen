<?php
namespace Cm\Api\Config;

class AllowCors {
		private const string ALLOW_CORS_ORIGIN_KEY = 'Access-Control-Allow-Origin';
		private const string ALLOW_CORS_ORIGIN_VALUE = '*';
		private const string ALLOW_CORS_METHOD_KEY = 'Access-Control-Allow-Methods';
		private const string ALLOW_CORS_METHOD_VALUE = 'GET, POST, PUT, DELETE, PATCH, OPTIONS';

		public function init(): void {
			$this->set(self::ALLOW_CORS_ORIGIN_KEY, self::ALLOW_CORS_ORIGIN_VALUE);
			$this->set(self::ALLOW_CORS_METHOD_KEY, self::ALLOW_CORS_METHOD_VALUE);
		}

		public function set(string $key, string $value): void {
			header($key . ':' . $value);
		}
}
