<?php

namespace Danilo\Receitas\Controllers\User;
use Danilo\Receitas\Models\Users\Users;
use Danilo\Receitas\Controllers\User\Service\Register\Validate;
use Danilo\Receitas\Helpers\Message\Message;
class RegisterPost
{
    protected Users $users;
    protected Validate $validate;
    protected Message $message;
    public function __construct(){
        $this->users = new Users();
        $this->validate = new Validate();
        $this->message = new Message();
    }

    public function execute($data)
    {
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        
        $this->users->create($data);    
        $this->message->setMessageSucess("Registrado com sucesso");
        $this->message->setMessageSucess("Bem vinda");
        header('location: /login');
        return;
       
    }
}