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
        if(!$this->validate->execute($data)){
            $this->message->setMessageError("Verifique os campos");
            header('location: /register');
            return;
        }
        $dataUser = $this->users->findOne([
            "email" => $data['email']
        ]);

        if($data){
            $this->message->setMessageError("Este usuario ja existe!");
            header('location: /register');
            return;
        }
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

        if($this->users->create($data) == false){
            $this->message->setMessageError("Ocorreu um erro ao registrar no banco de dados");
            header('location: /register');
            return;
        }
        
        $this->users->create($data);    
        $this->message->setMessageSucess("Registrado com sucesso");
        $this->message->setMessageSucess("Bem vinda");
        header('location: /login');
        return;
       
    }
}