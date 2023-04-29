<?php

require_once 'core/core.php'; //Inclui db.php e Administrator.php

$c = isset($_GET['c']) ? $_GET['c'] : 'Administrator';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';
$c .= 'Controller';

if(file_exists('controllers/' . $c . '.php')){
    require_once 'controllers/' . $c . '.php';//Inclui o AdministratorController.php
    if(method_exists($c, $m)){//Verifica se o método index existe dentro de AdministratorController.php
        $c = new $c;//Instancia a classe AdministratorController.php
        call_user_func([$c, $m]);//Chama o método index dentro de AdministratorController.php
    }else{
        die("Error: O método ou função [{$m}()] não existe");
    }
}else{
    die("Error: O controlador [{$c}] não existe.");
}