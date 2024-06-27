<?php

namespace Cm\Api\Config;
use RedBeanPHP\R;

$dsn = sprintf('mysql:host=%s;dbname=%s', $_ENV['DB_HOST'], $_ENV['DB_NAME']);
R::setup($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

$currentEnv = Environment::tryFrom($_ENV['APP_ENV']);
if($currentEnv?->envName() !== Environment::DEVELOPMENT->value) {
	R::freeze(true);
}

