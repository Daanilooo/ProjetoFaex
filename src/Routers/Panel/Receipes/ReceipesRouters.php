<?php

namespace Danilo\Receitas\Routers\Panel\Receipes;

use CoffeeCode\Router\Router;

class ReceipesRouters
{
    private Router $router;

    public function __construct(Router $router) 
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Danilo\Receitas\Controllers\Panel\Receipes');

        $this->router->get("/panel/receipes/", 'Receipes:execute');

        $this->router->get("/panel/receipes/create", 'Create:execute');
    }

}