<?php
    namespace Danilo\Receitas\Controllers\User;
    
    use Danilo\Receitas\Models\Users\Users;
    use Danilo\Receitas\Helpers\Message\Message;
    use Danilo\Receitas\Models\Users\UserSession;

    class LoginPost{

        public function __construct(){
            $this->users = new Users();
            $this->message = new Message();
            $this->userSession = new UserSession();
        }

        public function execute($data){
            $sucess = true;
            if(!isset($data['email']) or !isset($data['password'])){
                $this->message->setMessageError("Voce precisa preencher todos os campos");
                $sucess=false;
            }
            if(empty($data['email']) || empty($data['password'])){
                $this->message->setMessageError("Os campos devem estar preenchidos");
                $sucess = false;
            }
            
            if(!$sucess){
                header('location:/login');
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
                header('location:/login');
                return;
            };

            $this->userSession->create($user->id,$user->name,$user->email);
            header('location:/panel/receipes/');
        }
    }
   
?>