<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Users\UserSession;

class Logout
{
    public UserSession $userSession; 
    public function __construct() {
        $this->userSession = new UserSession();
    }

    public function execute()
    {   
        $this->userSession->destroy();
        header('location:\login');
    }

}