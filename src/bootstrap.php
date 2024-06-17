<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use EdvGraz\CMS\CMS;

define("APP_ROOT", dirname(__DIR__, 1));
require APP_ROOT . "/config/config.php";
require APP_ROOT . "/public/includes/functions.php";
require APP_ROOT . "/vendor/autoload.php";


$loader = new FilesystemLoader(APP_ROOT . '/templates');
$twig = new Environment($loader, [
    'cache' => APP_ROOT . '/templates/cache',
    'debug' => DEV_MODE,
]);

$twig->addGlobal('doc_root', DOC_ROOT);

if (DEV_MODE) {
    $twig->addExtension(new DebugExtension());
}

$cms = new CMS($dsn, $user_name, $password);
unset($dsn, $user_name, $password);

$session = $cms->getSession();
$twig->addGlobal('session', $session);
