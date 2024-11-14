<?php
namespace Danilo\Receitas\Helpers\Message;

class Message{
    public function setMessageSuccess($message){
        $_SESSION['message'][]=[
            'type' =>'sucess',
            'message'=>$message
        ];
    }

    public function setMessageError($message){
        $_SESSION['message'][]=[
            'type' =>'danger',
            'message'=>$message
        ];
    }

    public function getMessages(){
        if(isset($_SESSION['message'])){
           return $_SESSION['message'];
        }
        return false;
    } 

    public function destroyMessage(){
        if(isset($_SESSION['message'])){
            unset($_SESSION['message']);
        }
        
    }
}
?>
