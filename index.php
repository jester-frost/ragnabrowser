<?php
	include("header.php");
	
	/*
	*  Seleção de Servidor, definidos em uma Array(). 
	*/

	$servidores = ("Alpha" => "localhost", "Beta" => "localhost", "Cadimus" => "localhost");

	if(isset($_GET['servidor'])) {

	/* BLOCO HTML DE LOGIN */
?>

	<div class="limit">
	<div class="conteudo">
		<div class="dragme">
		    <div class="box login">
		    	<div class="top">
		        	<h1><i class="bal-ico"></i>Interface de Login</h1>
		    	</div>
		    	<form action="autentication.php" method="post" >
			        <label>Login: 
			        	<input type="text"name="login" placeholder="Usuario">
			        </label>
			        <input id="checkbox-manter" class="check" type="checkbox" />
					<label for="checkbox-manter" name="label-checkbox-manter" class="manter">
						Manter
					</label>
			        <label class="label-senha">Senha:
			        	<input type="password"name="senha" placeholder="Senha">
			        </label>
			        <div class="btns clearfix">
			        	<a href="logout.php" name="cancelar" class="cancel button">Cancelar</a>
			        	<button type="submit" name="ok" class="btn button">Ok</button>
				    </div>
		    	</form>
		    	
		    </div>
		</div>
	</div>

</div>


<?php
	/* FIM DO BLOCO HTML DE LOGIN */

	} else {

	/* BLOCO HTML DE SELEÇÃO DE SERVIDOR */
?>
	<div class="limit">
		<div class="conteudo">
			<div class="dragme" style="top: 160px;">
				<div class="box servers">
					<div class="top">
						<h1><i class="bal-ico"></i>Seleção de Serviço</h1>
					</div>
					<ul>
						<li class="first"><a href="login.php">Servidor 1</a></li>
						<li><a href="login.php">Servidor 2</a></li>
						<li><a href="login.php">Servidor 3</a></li>
						<li><a href="login.php">Servidor 4</a></li>
					</ul>
					<div class="btns clearfix">
						<a href="index.php" name="cancel" class="cancel button">Cancelar</a>
						<a href="login.php" name="ok" class="btn button">Ok</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	/* FIM DO BLOCO HTML DE SELEÇÃO DE SERVIDOR */
	}

	include("footer.php");
?>