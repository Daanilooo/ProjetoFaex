<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Receipes\Receipes;


class Edit
{   
    protected Receipes $receipes;
    public function __construct() {
        $this->template = new Loader();
        $this->receipes = new Receipes();
 
    }

    public function execute($data)
    {  
        $receipes = $this->receipes->findOne([
            'id' => $data['id']
        ]);
        $this->template->render('panel/receipesEdit', true, [
            'receipes' => $receipes
        ]);
    }

}