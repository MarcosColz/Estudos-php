<?php
$empresa = array ("Coffe");
$linguagens = array("Java"=>"a","Kotlin");
$ano = array("1999");
$nomeC = array("Martin");


 
echo "<table border='1'>"; //Criamos a tabela
//Aqui criamos o cabeçalho da tabela.
// A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
echo "<tr><td>Empresa criadora</td>"
."<td>Nome da linguagem</td>"
."<td>Ano</td>"
."<td>Nome Criador</td>"
."</tr>"; // Fechamos o cabeçalho. 

$i = 0;
$a = 0;
$b = 0;
$c = 0;
while($i <= 1) {
    $i++;
    //Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
        
        while($a < 1) {
            $a++;
            echo "<td>".$empresa[0]. "</td>";
            echo "<td>".$linguagens[0]."</td>";  
        }
        while($b < 1) {
            $b++;
            echo "<td>".$ano[0]."</td>";  
            echo "<td>".$nomeC[0]."</td>"; 
        }

        

         
        
         
         
    }
    // E fora do while fechamos a tabela.
    echo "</table>";

?>