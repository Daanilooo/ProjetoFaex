<?php
namespace Danilo\Receitas\Controllers\LandingPage;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Receipes\Receipes as ReceipesModel;

class LandingPage
{
    private Loader $template;
    private ReceipesModel $receipes;
    public function __construct() {
        $this->template = new Loader();
        $this->receipes = new ReceipesModel();
    }

    public function execute()
    {
       
        $receipes = $this->receipes->findAll([],"*", 6);
        $this->template->render("landingPage/landingPage", false, [
            "receipes" => $receipes
        ]);
    }
}