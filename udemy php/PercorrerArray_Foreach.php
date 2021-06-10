<?php
$Vendas = array(
    array("Produto"=>"Bic Isqueiro","Preço"=>"42.30","Fonecedor"=>"Bic Manaus"),
    array("Produto"=>"Vassoura noviça","Preço"=>"15.50","Fornecedor"=>"Betannins SP"),
    array("Produto"=>"Caneta Estadual","Preço"=>"12.50","Fornecedor"=>"Governo do Estado de SP")
);


foreach($Vendas as $TodosIndices=>$RecebeTodosIndices ){ 
    // A var idx está recuperando os índices de todos os arrays do $Vendas, isto é 0,1,2//
    foreach($RecebeTodosIndices as $SubIndices=>$Itens){ // A variável itens armazena os valores dos subindices"//
        echo " <h3>$SubIndices</h3> <br>$Itens";
        echo "<hr />";
            
    }
} 


?>