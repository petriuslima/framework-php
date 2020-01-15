<?php

//utilização da rule htaccess para gerar uma key com base na url
$key = (isset($_GET['key']) ? $_GET['key'].'/' : 'index/index');

//separação das keys a partir do caractere / em arrays
$separator = explode('/', $key);

//separação delas em variáveis a partir do array
$controller = $separator[0];
$action = ($separator[1] == null ? 'index' : $separator[1]);

//carregamento automatico dos models
function __autoload($file)
{
    require_once('app/models/' . ucwords($file) . '.php');
}

//requisição do controller central do framework
require_once('system/Controller.php');

//requisição do model central do framework
require_once('system/Model.php');

//requisição dos controllers a partir das keys
require_once('app/controllers/' . ucwords($controller) . 'Controller.php');

//instanciação das classes contidas nos controllers
$controllerClassName = ucwords($controller) . 'Controller';

$app = new $controllerClassName();
$app->$action();
