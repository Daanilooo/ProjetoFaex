<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Receipes\Receipes;
class ApiReceipes
{
    protected Loader $template;
    protected Receipes $receipes;
    public function __construct() {
        $this->template = new Loader();
        $this->receipes = new Receipes();
    }
    public function execute()
    {   
        $receipes = $this->receipes->findAll();

        echo json_encode($receipes);
        echo json_encode([
            "total_receipes" => count( $receipes)
        ]);
    }
}