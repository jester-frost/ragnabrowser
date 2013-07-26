<?php
	include("header.php");
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
	include("footer.php");
?>