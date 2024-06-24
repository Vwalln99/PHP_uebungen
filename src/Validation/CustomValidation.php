<?php

namespace Vw\Api\Validation;

use Respect\Validation\Validator as v;

class CustomValidation
{
    const MAX_STRING = 50;
    const MIN_STRING = 3;
    public function __construct(private readonly mixed $data)
    {
    }

    public function validate_create(): bool
    {
        $validation = v::attribute('firstname', v::stringType()->length(self::MAX_STRING, self::MIN_STRING))
            ->attribute('lastname', v::stringType()->length(self::MAX_STRING, self::MIN_STRING))
            ->attribute('email', v::email(), false)
            ->attribute('phone-num', v::phone(), false);

        return $validation->validate($this->data);
    }
    public function validate_update(): bool
    {
        $validation = v::attribute('firstname', v::stringType()->length(self::MAX_STRING, self::MIN_STRING))
            ->attribute('user_uuid', v::uuid(4))
            ->attribute('lastname', v::stringType()->length(self::MAX_STRING, self::MIN_STRING))
            ->attribute('phone-num', v::phone(), false);

        return $validation->validate($this->data);
    }

    public function validateUuid(): bool
    {
        return v::uuid(4)->validate($this->data);
    }
}
