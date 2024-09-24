<?php
    namespace Danilo\Receitas\Controllers\User;
    
    use Danilo\Receitas\Models\Users\Users;
    use Danilo\Receitas\Helpers\Message\Message;
    class LoginPost{
        public function __construct(){
            $this->users = new Users();
            $this->message = new Message();
        }

        public function execute($data){
            if(!isset($data['email']) or !isset($data['password'])){
                $this->message->setMessageError("Voce precisa preencher todos os campos");
            }
            if(empty($data['email']) || empty($data['password'])){
                $this->message->setMessageError("Os campos devem estar preenchidos");
            }
            if(!$sucess){
                header('location: / login');
                return;
            }  
            $user = $this->users->findOne([
                "email" => $data['email']
            ]);
            if(!$user){
                $this->message->setMessageError("Usuario não encontrado");
                header('location:/login');
                return;
            }
            if(!password_verify($data['password'],$user->password)){
                $this->message->setMessageError("Senha invalido");
            };
        }
    }
   
?>