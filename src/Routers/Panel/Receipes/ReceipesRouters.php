<?php

namespace Danilo\Receitas\Routers\Panel\Receipes;

use CoffeeCode\Router\Router;
use Danilo\Receitas\Models\Users\UserSession;

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

        $this->router->get("/panel/receipes/", 'Receipes:execute',middleware: UserSession::class);

        $this->router->get("/panel/receipes/create", 'Create:execute');

        $this->router->get("/panel/receipes/edit", 'Edit:execute');
    }

}