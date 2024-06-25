<?php

namespace Vw\Api\Service;

use Vw\Api\Validation\CustomValidation;
use Vw\Api\Validation\ValidationException;

class User
{


    public function __construct()
    {
    }

    public function create(mixed $data): array|object
    {
        $validation = new CustomValidation($data);
        if ($validation->validate_create()) {
            return ['data' => 'passed validation'];
        }
        throw new ValidationException('Invalid input, validation failed');
    }

    public function get(string $user_id): array|object
    {
        $validation = new CustomValidation($user_id);
        if ($validation->validateUuid()) {
            return ['data' => 'passed validation'];
        }
        throw new ValidationException('Invalid input, validation failed, uuid not valid');
    }

    public function getAll(): array
    {
        return ['message' => 'getAll'];
    }

    public function update(mixed $user): array
    {
        $validation = new CustomValidation($user);
        if ($validation->validate_update()) {
            return ['data' => 'passed validation'];
        }
        throw new ValidationException('Invalid input, validation failed, uuid not valid');
    }

    public function remove(string $user_id): array
    {
        $validation = new CustomValidation($user_id);
        if ($validation->validateUuid()) {
            return ['data' => 'passed validation'];
        }
        throw new ValidationException('Invalid input, validation failed, uuid not valid');
    }
}
