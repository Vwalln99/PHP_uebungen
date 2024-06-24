<?php

namespace Vw\Routes;

$resource = $_REQUEST['resource'] ?? null; //request ist alles ->post, get etc.

return match ($resource) {
    'user' => require 'user.routes.php',
    default => require '404.routes.php'
};
