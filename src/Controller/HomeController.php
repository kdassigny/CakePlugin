<?php

namespace App\Controller;

use App\Controller\AppController;


class HomeController extends AppController
{
    public $controlles = ['Posts.posts'];

    public function index()
    {
        include('PostsController.php');
    }
}