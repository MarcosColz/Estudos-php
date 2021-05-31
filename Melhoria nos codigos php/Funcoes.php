<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$numeroOperador=$_GET['ab'];
$numSubsequente=$_GET['num2'];






function adicao ($numeroOperador,$numSubsequente){
        return $numeroOperador + $numSubsequente;
        $operadorMais=$_GET['mais'];
    }
function vezes ($numeroOperador,$numSubsequente){
        return $numeroOperador * $numSubsequente;
        $operadorVezes=$_GET['vezes'];
    }
function menos ($numeroOperador,$numSubsequente){
        return $numeroOperador - $numSubsequente;
        $operadorMenos=$_GET['menos'];
    }
function divisao ($numeroOperador,$numSubsequente){
        return $numeroOperador / $numSubsequente;
        $operadorDivisao=$_GET['dividir'];
    }



if(isset($_GET['mais'])) {
    echo adicao($numeroOperador,$numSubsequente);
}
if (isset($_GET['vezes'])){
    echo vezes($numeroOperador,$numSubsequente);
}
if (isset($_GET['menos'])){
    echo menos($numeroOperador,$numSubsequente);
}
if (isset($_GET['dividir'])){
    echo divisao($numeroOperador,$numSubsequente);
}

?>