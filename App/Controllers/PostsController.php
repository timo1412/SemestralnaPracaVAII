<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Post;

class PostsController extends AControllerBase
{

    public function authorize($action)
    {
        switch ($action){
            case "edit":
            case "store":
            case "create":
                return $this->app->getAuth()->isLogged();
        }
        return true;
    }

    public function index(): Response
    {
        $posts = Post::getAll();
        return $this->html($posts);
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $postToEdit = Post::getOne($id);
        if ($postToEdit){
            $postToEdit->setText("zmeneny text");
        }
        return $this->html($postToEdit, viewName:'create.form');
    }

    public function store(){
        $id= $this->request()->getValue('id');
        $post =($id ? Post::getOne($id): new Post());
        $post->setText($this->request()->getValue('text'));
        $post->setAutor($this->request()->getValue('user'));
        $post->save();

        return $this->redirect("?c=posts");
    }

    public function delete() {
        $id = $this->request()->getValue('id');
        $postToDelete = Post::getOne($id);
        if ($postToDelete) {
            $postToDelete->delete();
        }
        return $this->redirect("?c=posts");
    }

    public function create(){
        return $this->html(new Post() ,viewName:'create.form');
    }
}