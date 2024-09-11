<?php

namespace Danilo\Receitas\Routers;

use CoffeeCode\Router\Router;
use Danilo\Receitas\Routers\User\UserRouters;
use Danilo\Receitas\Routers\Panel\Receipes\ReceipesRouters;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private receipesRouters $receipesRouters;

    public function __construct() {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->receipesRouters = new ReceipesRouters($this->router);
    }

    public function execute() 
    {
        $this->userRouter->execute();  
        $this->receipesRouters->execute();
        $this->router->dispatch();
        
        if ($this->router->error()) {
            echo "404";
        }
    }
}
