<?php
	
	require_once("config.inc.php");

	$tE = new templateEngine();


	if(isset($_GET['servidor'])) {

		/*
		*  Seleção de Servidor, definidos em uma Array(). 
		*/
		$servidores = Array("Alpha" => "localhost", "Beta" => "localhost", "Cadimus" => "localhost");

		if(array_key_exists($_GET['servidor'], $servidores)) {

			setcookie('Servidor', $_GET['servidor']);

			$arquivos = array(
			"standard/header",
			"inicial/login",
			"standard/footer"
			);

			$tE -> carregarArquivos($arquivos);

		} else {
			header('Location: index.php');
		}

	} else {

		$arquivos = array(
			"standard/header",
			"inicial/servidores",
			"standard/footer"
		);

		$tE -> carregarArquivos($arquivos);
	}
?>