<?php

namespace Danilo\Receitas\Controllers\User;
use Danilo\Receitas\Models\Users\Users;
use Danilo\Receitas\Controllers\User\Service\Register\Validate;

class RegisterPost
{
    protected Users $users;
    protected Validate $validate;
    public function __construct(){
        $this->users = new Users();
        $this->validate = new Validate();
    }

    public function execute($data)
    {
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        
        $this->users->create($data);    

        header('location: /login');
        return;
       
    }
}