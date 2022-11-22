<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\User;

class HistoryController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function store(){
        $id= $this->request()->getValue('id');
        $user = new User();
        $user->setFirstName($this->request()->getValue('firsName'));
        $user->setLastName();
        $user->setLogin();
        $user->setMentor();
        $user->setPassword();
    }
}