<?php


function getMax($num1,$num2,$num3){
    if ($num1 > $num2 && $num1 > $num3){
        echo "Num 1 Greater";
    }elseif ($num3 > $num2 && $num3 > $num1) {
        echo "Num 2 Greater";
    }else{
        echo "Num 3 Greater";
    }

}

echo getMax(4,2,1)."<br>";
echo getMax(1,2,5)."<br>";
echo getMax(1,3,2)."<br>";



?>
