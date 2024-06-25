<?php

namespace Vw\Api\ORM;

use RedbeanPHP\R;
use RedbeanPHP\RedException\SQL;
use Vw\Api\Entity\User as UserEntity;

class UserModel
{
    const TABLE_NAME = 'users';

    public static function create(UserEntity $data): false|string
    {
        $user = R::dispense(self::TABLE_NAME);
        $user->uuid = $data->get_uuid();
        $user->firstname = $data->get_firstname();
        $user->lastname = $data->get_lastname();
        $user->email = $data->get_email();
        $user->password = $data->get_password();
        $user->phone = $data->get_phone();
        $user->created_at = $data->get_created_at();

        try {
            $user_id = R::store($user);
        } catch (SQL $e) {
            return false;
        } finally {
            R::close();
        }
        $user = R::load(self::TABLE_NAME, $user_id);
        return $user->uuid;
    }

    public static function getAll(): array
    {
        $users = R::FindAll(self::TABLE_NAME);
        $user_exists = $users && count($users) > 0;
        if (!$user_exists) {
            return [];
        }

        $result = [];
        foreach ($users as $user) {
            $user_array = $user->export();
            unset($user_array['id']);
            $result[] = $user_array;
        }

        return $result;
    }
}
