<?php
	require_once("config.inc.php");

	if(isset($_POST['login']) && isset($_POST['senha'])) {

		$userid = $_POST['login'];
		$user_pass = $_POST['senha'];

		$secure = new secure();
		if($secure->login($userid, $user_pass, $_SERVER['REMOTE_ADDR'])) {
			$tE = new templateEngine();
			$arquivos = array(
				"standard/header",
				"inicial/login_success",
				"standard/footer"
				);
			$tE -> carregarArquivos($arquivos);
		} else {
			$error = true;
		}

	} else {
		$error = true;
	}

	if(isset($error)) {
		$tE = new templateEngine();

		$arquivos = array(
				"standard/header",
				"inicial/login_fail",
				"standard/footer"
				);
		$tE -> carregarArquivos($arquivos);
	}
?>