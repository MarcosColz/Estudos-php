<?php

$noticias = array(
    array("Titulo"=>"noticia 1","Conteudo"=>"Conteudo noticia 1")
    ,array("Titulo"=>"noticia 2","Conteudo"=>"Conteudo noticia 2")
    ,array("Titulo"=>"noticia 3","Conteudo"=>"Conteudo noticia 3"));

$idx = sizeof($noticias);
$i = 0;

while ($i < $idx){
    echo "<h3>".$noticias[$i]['Titulo']."</h3>";
    echo "<p>".$noticias[$i]['Conteudo']."</p>";
    echo "<br>";
    $i++;
}

?>