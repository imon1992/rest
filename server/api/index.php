<?php
//$url = $_SERVER['REQUEST_URI'];
//$url = '192.168.0.15/~user14/rest/client/server/stockquote.wsdl';
$url = '192.168.0.15/~user14/rest/client/server/stockquote.wsdl';
$method = $_SERVER['REQUEST_METHOD'];
var_dump($method);
//list($server, $user, $dir, $serverDir , $apiDir, $className, $data) = explode('/', $url, 7);

var_dump($server, $user, $dir, $serverDir , $apiDir, $className, $data);
var_dump($_REQUEST['rquest']);