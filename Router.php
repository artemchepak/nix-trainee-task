<?php

namespace app;

use app\models\Authorization;
use app\models\Posts;
use app\models\Profile;
use app\models\Registration;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public Posts $posts;
    public Registration $reg;
    public Authorization $auth;
    public Profile $profile;

    public function __construct()
    {
        $this->posts = new Posts();
        $this->reg = new Registration();
        $this->auth = new Authorization();
        $this->profile = new Profile();
    }

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if ($fn) {
            $controller = new $fn[0];
            call_user_func(array($controller, $fn[1]), $this);
        } else {
        }
    }

    public function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once __DIR__ . "/views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/_layout.php";
    }
}
