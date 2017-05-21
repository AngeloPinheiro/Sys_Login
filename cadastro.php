<?php
	require 'cadastro.html';
	require 'conexao.php';

	if(isset($_POST["enviar"])){
		$nome = $_POST["nome"];
		$login = $_POST["login"];
		$senha = $_POST["senha"];		
	}

	try {
 	 $stmt = $PDO->prepare('INSERT INTO usuarios VALUES(:nome, :login, :senha)');
 	 $stmt->execute(array(
	    ':nome' => $nome,
	    ':login' => $login,
	    ':senha' => $senha
	  )
 	 );
    echo $stmt->rowCount(); 
    echo"<p> <center> <h1> CADASTRO REALIZADO COM SUCESSO! </h1> </center> </p>";
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}

?>