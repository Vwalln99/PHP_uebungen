<?php

namespace Vw\Api\Service;

use Vw\Api\Validation\CustomValidation;
use Vw\Api\Validation\ValidationException;
use Vw\Api\Entity\User as UserEntity;
use Ramsey\Uuid\Uuid;
use Vw\Api\ORM\UserModel;

class User
{
    public function __construct()
    {
    }

    public function create(mixed $data): array|object
    {
        $validation = new CustomValidation($data);

        if ($validation->validate_create()) {
            $uuid = Uuid::uuid4()->toString();
            $user_entity = new UserEntity();
            $user_entity->set_uuid($uuid)
                ->set_firstname($data->firstname)
                ->set_lastname($data->lastname)
                ->set_email($data->email)
                ->set_password($data->password)
                ->set_phone($data->phone)
                ->set_created_at(date('Y-m-d'));

            $valid = $user_uuid = UserModel::create($user_entity);
            if ($valid) {
                $data->uuid = $user_entity->get_uuid();
                return $data;
            }
            return [];
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
