<?php

if (!isset($seg)) {
    exit;
}

function vaziod($dadosd) {
    $dadosd_st = array_map('strip_tags', $dadosd);
    $dadosd_tr = array_map('trim', $dadosd_st);
    if (in_array('', $dadosd_tr)) {
        return false;
    } else {
        return $dadosd_tr;
    }
}
