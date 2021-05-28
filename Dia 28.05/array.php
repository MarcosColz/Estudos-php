<html>

<head>
</head>

<body>
    <?php
    $friends = array("Kotlin","Ruby","Java","React");

    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    for ($i=0; $i < 10; $i++){
        echo "<br>".$friends[$i];
    
    }



    ?>
</body>

</html>