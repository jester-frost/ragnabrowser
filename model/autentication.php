<?php
  include("header.php");
?>
<?php 
	include("connection.php");
?>
<html>
<body>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM `login` WHERE userid = '$login' And  user_pass = '$senha' ") or die (mysql_error());
$row = mysql_num_rows($sql);
if ($row > 0){
	while ($dados = mysql_fetch_array($sql)) {
	session_start();
	$_SESSION['login']=$_POST['login'];
	$_SESSION['senha']=$_POST['senha'];
	$acc = $dados['account_id'];
	$msg="A Merda Funciona";
	echo"<script>loginsucess();</script>";
	echo "
	<div class='limit'>
  		<div class='conteudo'>
			<div class='dragme'>
				<div class='box msg'>
					<div class='top'>
					    <h1><i class='bal-ico'></i>Conectando ao Servidor</h1>
					</div>
					<h1 class='title'>Aguarde um momento. $acc</h1>
				</div>
			</div>
		</div>
	</div>
	" ;
}}
else {
	echo"<script>loginfail();</script>";
	echo"
	<div class='limit'>
	  	<div class='conteudo'>
			<div class='dragme'>
				<div class='box msg'>
					<div class='top'>
					    <h1><i class='bal-ico'></i>Erro de conexão</h1>
					</div>
					<h1 class='title'>Erro ao tentar se conectar Tente novamente !</h1>
				</div>
			</div>
		</div>
	</div>
	";
}


?>

	
</body>
</html>
<?php
  include("footer.php");
?>