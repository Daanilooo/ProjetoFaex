<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;

class Create
{
    private Loader  $template;
    public function __construct() {
        $this->template = new Loader();
    }

    public function execute()
    {   
        $this->template->render('panel/receipesCreate', true);
    }

}