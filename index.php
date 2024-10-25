<?php

require_once './vendor/autoload.php';
session_start();


use Danilo\Receitas\Routers\Loader;
use Danilo\Receitas\Helpers\Database\Database;
use Danilo\Receitas\Models\Users\Users;

$loader = new Loader();
$loader->execute();

?>