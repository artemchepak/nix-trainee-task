<?php

namespace app\controllers;


use app\Router;

class MainController
{
    public function index(Router $router)
    {
        $posts = $router->db->allPosts();
        $router->renderView('\index', [
            'posts' => $posts
        ]);
    }

    public function login(Router $router)
    {
        $router->renderView('\login');
    }

    public function registration(Router $router)
    {
        $router->renderView('\registration');
    }

    public function profile(Router $router)
    {
        $router->renderView('\profile');
    }


}