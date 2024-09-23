<?php

function boas vindas ($nome){
    return $nome . ".! Seja Bem-vindo";
}
function media ($a,$b){
    $media = ($a + $b)/2;
    $msg = "";

    if($media < 5){
        $msg = "reprovado";
    } else {
        $msg = "aprovado";
    }
    return $msg;
}