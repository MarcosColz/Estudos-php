<?php

$Sequencia = array(
    array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
    array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20));
$i = 0;
foreach ($Sequencia as $PegarIndices=>$RecebeIndices){
    foreach ($RecebeIndices as $SubIndices=>$PegaSubIndices){
           while($i < 6){
            $montarArray = array(rand(0,$PegaSubIndices));
           }
        }
}

print_r($montarArray);

?>