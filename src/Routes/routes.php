<?php

namespace Vw\Routes;

use function Vw\Api\Helpers\response;

use Vw\Api\Validation\ValidationException;

$resource = $_REQUEST['resource'] ?? null; //request ist alles ->post, get etc.

try {
    return match ($resource) {
        'user' => require 'user.routes.php',
        default => require '404.routes.php'
    };
} catch (ValidationException $e) {
    response(data: [
        'errors' => $e->getMessage(),
        'code' => $e->getCode()
    ]);
}
