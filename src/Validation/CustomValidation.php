<?php

namespace Cm\Api\Validation;

use Respect\Validation\Validator as v;

class CustomValidation
{
	const  MIN_STRING = 3;
	const  MAX_STRING = 50;
	const  MIN_PASSWORD_LEN = 8;

	public function __construct(private readonly mixed $data)
	{
	}

	public function validate_login(): bool
	{
		$validation = v::attribute('email', v::email())
			->attribute('password', v::stringType()->length(self::MIN_PASSWORD_LEN));
		return $validation->validate($this->data);
	}

	public function validate_create(): bool
	{
		$validation = v::attribute('firstname', v::stringType()
			->length(self::MIN_STRING, self::MAX_STRING))
			->attribute('lastname', v::stringType()
				->length(self::MIN_STRING, self::MAX_STRING))
			->attribute('email', v::email())
			->attribute('phone_num', v::phone(), mandatory: false);

		return $validation->validate($this->data);
	}

	public function validate_update(): bool
	{
		$validation = v::attribute('uuid', v::uuid(4))
			->attribute('firstname', v::stringType()
				->length(self::MIN_STRING, self::MAX_STRING))
			->attribute('lastname', v::stringType()
				->length(self::MIN_STRING, self::MAX_STRING))
			->attribute('phone_num', v::phone(), mandatory: false);
		return $validation->validate($this->data);
	}

	public function validateUuid(): bool
	{
		return v::uuid(version: 4)->validate($this->data);
	}
}
