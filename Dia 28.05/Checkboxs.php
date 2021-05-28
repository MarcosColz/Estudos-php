<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<p>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="checkboxs.php" method="GET">
    <input type="submit" name="enviar" value="enviar"><br>

  Kotlin  <input type="checkbox" name="linguaguens[]" value="Kotlin"> <br>
  Ruby   <input type="checkbox" name="linguaguens[]" value="Ruby"> <br>
  Pearl   <input type="checkbox" name="linguaguens[]" value="Pearl"> <br>

</form>

<?php
if(isset($_GET["enviar"])){
$lang = $_GET ["linguaguens"];

    for($i=0;$i<3;$i++){
        echo $lang[$i];
    }
}
//

error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>

</body>
</html>