<?php

namespace app\controllers;


use app\Router;
use PDO;

class MainController
{
    public Registration $reg;

    public function index(Router $router)
    {
        $posts = $router->posts->getPosts();
        $router->renderView('\index', [
            'posts' => $posts
        ]);
    }

    public function login(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $router->auth->userAuthotization();


        }

        $router->renderView('\login');
    }

    public function profile(Router $router)
    {
        $profile = $router->profile->viewProfile();
        $router->renderView('\profile', [
            'userData' => $profile
        ]);
    }

    public function registration(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $router->reg->userRegistration();
        }

        $router->renderView('\registration');
    }



    public function registrationSuccess(Router $router)
    {
        $router->renderView('\registrationSuccess');
    }

    public function clear(Router $router){
        $router->auth->clearCookie();
    }
}