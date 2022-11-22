<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use http\Client\Curl\User;

class UsersController extends AControllerBase
{

    public function index(): Response
    {
        $users = User::getAll();
        return $this->html($users);
    }




}