<?php

require_once './vendor/autoload.php';
session_start();


use Danilo\Receitas\Routers\Loader;
use Danilo\Receitas\Helpers\Database\Database;
use Danilo\Receitas\Models\Users\Users;

// $user = new Users();

// $data = [
//     'name' => "Danilo Souza",
//     'email' => "danilo@gmail.com",
//     'phone' => "343534657",
//     'password' => password_hash('123456',PASSWORD_DEFAULT)
// // ];
// $user->create($data);
$loader = new Loader();
$loader->execute();