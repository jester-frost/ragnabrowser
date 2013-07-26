<?php
	session_start();
	if (!isset ($_SESSION["login"]) || !isset ($_SESSION["senha"])) {
		header("location: login.php");
		exit;
	}else {
		$msg = "Logado";
	}
?>
<?php 
	$x ="off";
	$y="on";
	if ($msg == '') 
	{
		echo"
		<div class='estatus'>
			<h1><i class='bal-ico'></i>
			<div class='bbox-$x'></div><a href='servidores.php' class='btn button white'>Logar</a>
		</div>";
	} else {
		echo"
		<div class='estatus'>
			<h1><i class='bal-ico'></i>$msg
			<div class='bbox-$y'></div><a href='logout.php' class='btn button white'>Sair</a>
		</div>";
	}
?>