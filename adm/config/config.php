<?php
if(!isset($seg)){
    exit;
}
$url_host = filter_input(INPUT_SERVER, 'HTTP_HOST');
define('pg', "http://$url_host/sga1/adm");
//define('pg', "http://meu dominio.com.br/sga1/adm");
