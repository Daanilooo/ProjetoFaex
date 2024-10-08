<?php

namespace Danilo\Receitas\Routers\User;

use CoffeeCode\Router\Router;
use Danilo\Receitas\Controllers\User\Login;
use Danilo\Receitas\Controllers\User\Register;
use Danilo\Receitas\Controllers\User\RegisterPost;
use Danilo\Receitas\Controllers\User\LoginPost;

class UserRouters
{
    private Router $router;
    
    private Login $login;

    private RegisterPost $registerPost;
    private Register $register;

    public function __construct(Router $router) {
        $this->router = $router;
        $this->login = new Login();
        $this->register = new Register();
        $this->registerPost = new RegisterPost();
        $this->loginPost = new LoginPost();
    }

    public function execute()
    {
        $this->router->get("/login", function () {
            $this->login->execute();
        });
        
        $this->router->post("/login/validate", function ($data) {
            $this->loginPost->execute($data);
        });

        $this->router->get("/register", function () {
            $this->register->execute();
        });

        $this->router->post("/register/save", function ($data) {
            $this->registerPost->execute($data);
        });

    }
}