<?php

namespace Vw\Api\Service;

use Vw\Api\Validation\CustomValidation;

class User
{


    public function __construct(
        private string $firstname,
        private string $lastname,
        private int $age
    ) {
    }

    public function create(mixed $data): array|object
    {
        $validation = new CustomValidation($data);
        if ($validation->validate_create()) {
            return ['data' => 'passed validation'];
        }
        return ['data' => 'validation not passed'];
    }

    public function get(string $user_id): array|object
    {
        $validation = new CustomValidation($user_id);
        if ($validation->validateUuid()) {
            return ['data' => 'passed validation'];
        }
        return ['data' => 'validation not passed'];
    }

    public function getAll(): array
    {
        return ['message' => 'getAll'];
    }

    public function update(mixed $user_data): array
    {
        return ['message' => 'update'];
    }

    public function remove(string $user_id): array
    {
        return ['message' => 'remove'];
    }
}
