<?php

namespace Vw\Api\ORM;

use RedbeanPHP\R;
use Vw\Api\Entity\User as UserEntity;

class UserModel
{
    const TABLE_NAME = 'users';

    public static function create(UserEntity $data)
    {
        $user = R::dispense(self::TABLE_NAME);
        $user->uuid = $data->get_uuid();
        $user->firstname = $data->get_firstname();
        $user->lastname = $data->get_lastname();
        $user->email = $data->get_email();
        $user->password = $data->get_password();
        $user->phone = $data->get_phone();
        $user->created_at = $data->get_created_at();

        $user_id = R::store($user);
        R::close();
        return $user_id;
    }
}
