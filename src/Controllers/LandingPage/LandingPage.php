<?php
namespace Danilo\Receitas\Controllers\LandingPage;


use Danilo\Receitas\Helpers\Template\Loader;
class LandingPage
{
    private Loader $template;
    public function __construct() {
        $this->template = new Loader();
    }
    public function execute()
    {
        $this->template->render("landingPage/landingPage", false);
    }
}