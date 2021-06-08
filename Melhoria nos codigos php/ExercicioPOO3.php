<?php

class VendaProduto{
    public $NomeProduto;
    public $MarcaProduto;
    public $TipoProduto;
    private checagemID($IdProduto);


function __construct($NomeProduto,$MarcaProduto,$TipoProduto,$IdProduto){
    $this->NomeProduto = $NomeProduto ;
    $this->MarcaProduto = $MarcaProduto;
    $this->TipoProduto = $TipoProduto;
    $this->checagemID($IdProduto);
}

function checagemID($IdProduto){
    if(strlen($IdProduto) >= 5 ){
        return "O ID é válido";

    }else{
        return "O ID é inválido";
    }
       
}


}
$PrimeiroProdutoVendido = new VendaProduto("Isqueiro max","Bic","Consumo","1_323");

echo $PrimeiroProdutoVendido->checagemID("1_323");








?>
