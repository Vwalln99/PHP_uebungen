<?php

namespace Vw\Api\Helpers;

/**
 * returns data in json format
 */
function response(mixed $data): void
{
    echo json_encode($data);
}
