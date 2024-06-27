<?php

namespace Cm\Api\Helpers;


/**
 * Returns Data in JSON format
 * @param mixed $data
 *
 * @return void
 *
 */
function response(mixed $data):void {
	echo json_encode($data);
}

function hashPassword(string $password): false|null|string {
	return password_hash($password, PASSWORD_ARGON2I);
}

