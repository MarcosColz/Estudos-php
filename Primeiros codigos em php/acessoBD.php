<?php
		$servidor = "127.0.0.1";
		$usuario = "root";
		$senha = "" ;
		$bancodados = "php2";

		$user = $_POST ['nome'];
		$email = $_POST ['email'];
		$cidade = $_POST ['cidade'];
		$estado = $_POST ['estado'];
		$opniao = $_POST ['opniao'];

		$conexao = mysqli_connect($servidor,$usuario,$senha,$bancodados) or die ("Erro ao conectar no servidor");


		$sql = "INSERT INTO usuario (nome,email,cidade,estado) values ('$user','$email','$cidade','$estado')";
		mysqli_query($conexao,$sql) or die ("Erro ao tentar cadastrar registro");
		mysqli_close($conexao);

		print "Nome :".$nome;
		echo "<br>";
		echo "<b>";
		print("Email :".$email);
		
		echo "<br>";
		
		echo "Cidade : ".$cidade;
		echo "<br>";
	
		echo "Estado :".$estado;
		echo "<br>";

		echo "Opniao".$opniao;
		echo "</b>";


		echo "";
?>