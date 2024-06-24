<?php

namespace Vw\Routes;

use Vw\Api\Service\User;


$action = $_REQUEST['action'] ?? null;

enum UserAction: string
{
    case CREATE = 'create';
    case GET = 'get';

    case GET_ALL = 'get_all';
    case REMOVE = 'remove';
    case UPDATE = 'update';

    //TODO: get user data from http-body


    function getResponse()
    {
        $user = new User('viktoria', 'wallner', 25);
        $user_id = 1;
        $user_data = ['name' => 'test'];

        $response = match ($this) {
            self::CREATE => $user->create($user_data),
            self::GET => $user->get($user_id),
            self::GET_ALL => $user->getAll(),
            self::UPDATE => $user->update($user),
            self::REMOVE => $user->remove($user_id),
        };

        return json_encode($response);
    }
}


$user_action = UserAction::tryFrom($action);
if ($user_action) {
    echo $user_action->getResponse();
} else {
    require '404.routes.php';
}
