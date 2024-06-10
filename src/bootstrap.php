<?php
define("APP_ROOT", dirname(__DIR__, 1));
require APP_ROOT . "/config/config.php";
require APP_ROOT . "/public/includes/functions.php";
require APP_ROOT . "/vendor/autoload.php";

use EdvGraz\CMS\CMS;


$cms = new CMS($dsn, $user_name, $password);
unset($dsn, $user_name, $password);
