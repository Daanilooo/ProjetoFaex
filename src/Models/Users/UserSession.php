<?php
namespace Danilo\Receitas\Models\Users;

use CoffeCode\Router\Router;
class UserSession{

    public function handle($router){
        if($this->getSession()==null){
            $router->redirect('/login');
        }
        return true;
    }
    public function create($id, $name,$email){
        $_SESSION['user'] = [
            "id" => $id,
            "name" => $name,
            "email" => $email
        ];
    }

    public function getSession(){
        return $_SESSION['user'] ?? null;
    }

    public function destroy(){
        if(isset($_SESSION['user'])){
            unset ($_SESSION['user']);
            return true;
        }
    }
}
?>