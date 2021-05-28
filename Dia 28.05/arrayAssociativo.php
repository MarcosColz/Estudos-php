<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="arrayAssociativo.php" method="GET">

    <input type="submit" name="enviar">
    <input type="text" name="alunos">

    <?php
        $alunos=$_GET['alunos'];
        $notas= array("Marcos"=>"10","Cyntia"=>"9");

        if(isset($_GET['enviar'])) {
         echo $notas[$alunos];

        }
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
    ?>
    </form>
</body>
</html>