<?php
//utilização da rule htaccess para gerar uma key com base na url
$_GET['key'] = (isset($_GET['key']) ? $_GET['key'].'/' : 'index/index');
$key = $_GET['key'];
//separação das keys a partir do caractere / em arrays
$separator = explode('/', $key);
//separação delas em variáveis a partir do array
$controller = $separator[0];
$action = ($separator[1] == null ? 'index' : $separator[1]);

//requisição do controller central do framework
require_once('system/Controller.php');
//requisição dos controllers a partir das keys
require_once('app/controllers/'.ucwords($controller).'Controller.php');

//instanciação das classes contidas nos controllers
$class = (ucwords($controller).'Controller');
$app = new $class();
$app->$action();