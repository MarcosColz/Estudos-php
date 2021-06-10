<?php


$Vendas = array(
    array("Produto"=>"Bic Isqueiro","Preço"=>"42.30"),
    array("Produto"=>"Vassoura noviça","Preço"=>"15.50"),
    array("Produto"=>"Caneta Estadual","Preço"=>"12.50")
);
$idxArrayAutomatizado=count($Vendas);
$idx = 0;


while($idx < $idxArrayAutomatizado){
    echo "<h3>".$Vendas[$idx]['Produto']."</h3>";
    echo "<p>".$Vendas[$idx]['Preço']."</p>";
    $idx++;


}

?>