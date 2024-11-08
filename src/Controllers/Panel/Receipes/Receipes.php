<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Receipes\Receipes as ReceipesModel;

class Receipes
{
    public function __construct() {
        $this->template = new Loader();
        $this->receipes = new ReceipesModel();
    }

    public function execute()
    {   
        $receipes = $this->receipes->findAll();
        $this->template->render('panel/receipes', true,[
            "receipes" => $receipes
        ]);
    }

}