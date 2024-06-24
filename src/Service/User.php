<?php

namespace Vw\Api\Service;

class User
{
    private string $firstname;
    private string $lastname;
    private int $age;

    public function __construct(string $first, string $last, int $age)
    {
        $this->firstname = $first;
        $this->lastname = $last;
        $this->age = $age;
    }

    public function create(mixed $user_data): array|object
    {
        return [
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'age' => $this->age,
        ];
    }

    public function get(string $user_id): array|object
    {
        return ['message' => 'get'];
    }

    public function getAll(): array
    {
        return ['message' => 'getAll'];
    }

    public function update(mixed $user): array
    {
        return ['message' => 'update'];
    }

    public function remove(string $user_id): array
    {
        return ['message' => 'remove'];
    }
}
