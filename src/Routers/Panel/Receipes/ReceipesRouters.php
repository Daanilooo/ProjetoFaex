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

        $this->router->get("/api/receipes/", 'ApiReceipes:execute');

        $this->router->get("/panel/receipes/", 'Receipes:execute', middleware: UserSession::class);

        $this->router->get("/panel/receipes/search", 'Receipes:execute', middleware: UserSession::class);
        // ,middleware:UserSession::class
        $this->router->get("/panel/receipes/create", 'Create:execute', middleware: UserSession::class);

        $this->router->post("/panel/receipes/create/save", 'CreatePost:execute', middleware: UserSession::class);

        $this->router->get("/panel/receipes/edit/{id}", 'Edit:execute', middleware: UserSession::class);

        $this->router->post("/panel/receipes/edit/{id}", 'EditPost:execute', middleware: UserSession::class);

        $this->router->post("/panel/receipes/delete/{id}", 'Delete:execute', middleware: UserSession::class);

        $this->router->get("/panel/receipes/logout", 'Logout:execute', middleware: UserSession::class);
    }

}