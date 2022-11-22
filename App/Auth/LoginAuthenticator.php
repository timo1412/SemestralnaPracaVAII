<?php

namespace App\Auth;

use App\Models\User;

class LoginAuthenticator extends DummyAuthenticator
{
    function login($login, $password): bool
    {

        $idUser = User::getOneLogin($login);

        if ($idUser->getPassword() == $password) {
            $_SESSION['user'] = $idUser->getLastName();
            return true;
        }
        return false;
    }
}
