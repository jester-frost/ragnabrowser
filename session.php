<?php 
include("connection.php")
?>
<?php
	session_start();
	if (!isset ($_SESSION["login"]) || !isset ($_SESSION["senha"])) {
		header("location: login.php");
		exit;
	} else {
		echo"<script>loginsucess();</script>";
		echo"
		<div class='limit'>
		  	<div class='conteudo'>
				<div class='dragme'>
					<div class='box msg'>
						<div class='top'>
						    <h1><i class='bal-ico'></i>Conectado</h1>
						</div>
						<h1 class='title'>Você ja está Conectado !</h1>
					</div>
				</div>
			</div>
		</div>
		";
	}

?>