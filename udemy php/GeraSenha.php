<?php

function gerarSenhaForte($quantidadeCaracteres){
    $padrao = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%&*012345678910";
    $armazenamentodDeCaracteres= "";

    
    for ($i=0; $quantidadeCaracteres > $i ;$i++ ){

         $armazenamentodDeCaracteres .= $padrao[rand(0,strlen($padrao)-1)];

    }
    return $armazenamentodDeCaracteres;
    
}












?>