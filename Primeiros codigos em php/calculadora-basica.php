<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="get" action="index.php">
    <!-- Inputs para o usuário selecionar o número ! -->
    <input type="number" name="num1">
    <input type="number" name="num2">
    <!-- Botão para enviar a operação -->
    <input type="submit" name="send" value="Send">
    <br>
    <!--Sessão de seleção do operador -->
    <h6>Selecione um operador lógico </h6>
    <input type="text" name="operador">
    <br>
    <!--Declaração das váriveis com os valores dos forms num1 e num2 -->
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    ?>
    <!--Área para checar o operador selecionado-->
    <?php
    $operador = $_GET['operador'];
    echo 'OPERADOR : '.$operador;
    ?>
    <!--Manipulação dos valores postos pelo usuário -->
    <?php
    if ($operador == 'x') {
      $operation = $num1 * $num2;
      /*Quebra de linha*/
      echo "<br>";
      /* Exibição do resultado*/
      echo 'RESULTADO: '.$operation;
    }elseif ($operador == '-') {
      $operation = $num1 - $num2;
      /*Quebra de linha*/
      echo "<br>";
      /* Exibição do resultado*/
      echo 'RESULTADO: '.$operation;
    }elseif ($operador == '+') {
      $operation = $num1 + $num2;
      /*Quebra de linha*/
      echo "<br>";
      /* Exibição do resultado*/
      echo 'RESULTADO: '.$operation;
    }elseif ($operador == '/') {
      $operation = $num1 / $num2;
      /*Quebra de linha*/
      echo "<br>";
      /* Exibição do resultado*/
      echo 'RESULTADO: '.$operation;
    }else {
      echo "Você não selecionou nenhum operador lógico válido !!";
    }
    ?>




  </form>


</body>



</html>
