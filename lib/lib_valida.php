<?php
if (!isset($seguranca)) {
    exit;
}
function limparurl($conteudo){
    $formato_a = '"!@#$%*()+{[}];:,\\\'<>ºª';
    $formato_b = '___________________________';
    $conteudo_ct = strtr($conteudo, $formato_a, $formato_b);
    
    $conteudo_br = str_ireplace(" ", "", $conteudo_ct);
    
    $conteudo_st = strip_tags($conteudo_br);
    
    $conteudo_lp = trim($conteudo_st);
    
    return $conteudo_lp;
}