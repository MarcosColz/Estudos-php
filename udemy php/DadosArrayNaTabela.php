<?php
$empresaCriadora = array ("Sun Microsystems","JetBrains");
$linguagens = array("Java","Kotlin");
$anoCriacao = array("1996","2011");
$Idealista = array("James Gosling","JetBrains");


 
echo "<table border='1'>"; //Criamos a tabela
//Aqui criamos o cabeçalho da tabela.
// A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
echo "<tr><td>Empresa criadora</td>"
."<td>Nome da linguagem</td>"
."<td>Ano</td>"
."<td>Nome Criador</td>"
."</tr>"; // Fechamos o cabeçalho. 

$i = 0;
$PrimeiroCabeçalho = 0;
$SegundoCabeçalho = 0;
while($i <= 1) {
    $i++;
    //Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
        
        while($PrimeiroCabeçalho < 1) {
            $a++;
            echo "<td>".$empresa[0]. "</td>";
            echo "<td>".$linguagens[0]."</td>";  
        }
        while($SegundoCabeçalho < 1) {
            $b++;
            echo "<td>".$anoCriacao[0]."</td>";  
            echo "<td>".$Idealista[0]."</td>"; 
        }

        

         
        
         
         
    }
    // E fora do while fechamos a tabela.
    echo "</table>";

?>