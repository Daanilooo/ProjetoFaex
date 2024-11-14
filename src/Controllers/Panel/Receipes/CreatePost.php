<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Message\Message;
use Danilo\Receitas\Models\Receipes\Receipes;

class CreatePost
{
    protected Receipes $receipes;

    protected Message $message;

    public function __construct() {
        $this->receipes = new Receipes();
        $this->message = new Message();
    }

    public function execute($data)
    {  
        //deve conter alem da criação a validação dos dados     
        $this->receipes->create($data);
        $this->message->setMessageSuccess('Receita criada com sucesso');
        header('location: /panel/receipes/');
    }
}
        

?>