<?php
namespace Danilo\Receitas\Routers\LandingPage;

use CoffeeCode\Router\Router;
class LandingPageRouters 
{
    private Router $router;
    public function __construct(Router $router) 
    {
        $this->router = $router;
    }
    public function execute()
    {
        $this->router->namespace('Danilo\Receitas\Controllers\LandingPage');
            
        $this->router->get("/", 'LandingPage:execute');
    }
}