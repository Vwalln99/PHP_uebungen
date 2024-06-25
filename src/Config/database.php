<?php

namespace Vw\Api\Config;

use Vw\Api\Config\Enviroment;

use RedBeanPHP\R;

$dsn = sprintf('mysql:host=localhost;dbname=api', $_ENV['DB_HOST'], $_ENV['DB_NAME']);
R::setup($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

$currentEnv = Enviroment::tryFrom($_ENV['APP_ENV']);
if ($currentEnv->envName() !== Enviroment::DEVELOPMENT->value) {
    R::freeze(true);
}
