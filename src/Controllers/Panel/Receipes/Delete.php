<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Helpers\Template\Loader;
use Danilo\Receitas\Models\Receipes\Receipes;
use Danilo\Receitas\Helpers\Message\Message;
class Delete
{
    protected Loader $template;
    protected Receipes $receipes;
    protected Message $message;
    public function __construct() {
        $this->template = new Loader();
        $this->receipes = new Receipes();
        $this->message = new Message();
    }
    public function execute($data)
    {   
        if($this->receipes->delete($data['id'])) {
            // $this->message->setMessageSuccess('Deleted successfully');
            header('Location: /panel/receipes/');
            return;
        }
        $this->message->setMessageSuccess('Não foi possivel deletar');
        header('Location: /panel/receipes/');
    }
}