<?php
namespace Danilo\Receitas\Helpers\Template;
use Danilo\Receitas\Helpers\Message\Message;

class Loader
{   
    private Message $message; 
    public function __construct(){
        $this->message = new Message();
    }
    public function render($template, $default = true, $data = []) 
    {
        $_messages = $this->message->getMessages();
        foreach($data as $key => $value ){
            ${$key} = $value;
        }

        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/header.php"));    
        }

        require_once(realpath(dirname(__FILE__) . "/../../views/$template.php"));    
        require_once(realpath(dirname(__FILE__) . "/../../views/partias/message.php"));    
    
        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/footer.php"));    
        }
        $this->message->destroyMessage();
    }
}