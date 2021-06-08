<?php


class Carro {
    var $Modelo;
    var $AroPadrao;
    private $VistoriaAnual;
   


    function __construct($Modelo,$AroPadrao,$VistoriaAnual)
    {
        $this->Modelo = $Modelo;    
        $this->AroPadrao = $AroPadrao;
        $this->opcoesChecagemVistoria($VistoriaAnual);
      
    }

    function opcoesChecagemVistoria($VistoriaAnual){
        if ($VistoriaAnual = "sim" || "não"){
            return $this->VistoriaAnual = $VistoriaAnual;
        }else{
            return "Consulte a sua situação de vistoria";
        }
    }

    function checarVistoria($VistoriaAnual){
        if ($VistoriaAnual == "não" || $VistoriaAnual == "nao"){
            return $AutorizadoVenda = "não legalizada";
        }elseif($VistoriaAnual == "sim"){
            return $AutorizadoVenda = "legalizada";
        }
    }
}

     $CarroVendido1 = new Carro("Mercedes","20","sim");

     echo $CarroVendido1->Modelo;
     echo "<hr>";
     echo $CarroVendido1->AroPadrao;
     echo "<hr>";
     echo "A situação de venda do carro é : ".$CarroVendido1->checarVistoria("sim");

     echo "<br>";
     
     $CarroVendido2 =  new Carro("Volvo","19","não");
     echo "<hr>";
     echo "A situação de venda do carro é : ".$CarroVendido2->checarVistoria("não");
     echo "<hr>";
     echo $CarroVendido2->Modelo;

     







?>
