<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;


class Edit
{
    public function __construct() {
        $this->template = new Loader();
 
    }

    public function execute()
    {   

        $this->template->render('panel/receipesEdit', true);
    }

}