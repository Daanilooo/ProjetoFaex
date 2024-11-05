<?php
namespace Danilo\Receitas\Controllers\Panel\Receipes;

use Danilo\Receitas\Models\Receipes\Receipes;
use Danilo\Receitas\Helpers\Message\Message;
class EditPost
{
    protected Receipes $receipes;
    protected Message $message;
    public function __construct() {
        $this->receipes = new Receipes();
        $this->message = new Message();
    }
    public function execute($data)
    {    
        $id = $data['id'];
        unset($data['id']);
        $this->receipes->update($data, $id);
        // $this->message->setMessageSuccess('Agendamento atualizado com sucesso');
        header('location: /panel/receipes/');
    }
}