<?php 

class Carro {
    var $marca;
    var $rodagem;
    var $aro;


    function __construct($aMarca,$aRodagem,$aAro){
        $this-> marca = $aMarca;
        $this-> rodagem = $aRodagem;
        $this-> aro = $aAro;

    }
}

$PrimeiroCarroVendido = new Carro("Volvo","150","20");

echo $PrimeiroCarroVendido->marca;






?>