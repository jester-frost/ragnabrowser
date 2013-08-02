	<div class="limit">
		<div class="conteudo">
			<div class="centralizar">
				<div class="dragme">
					<div class="box login">
						<div class="top">
							<h1><i class="bal-ico"></i>Interface de Login</h1>
						</div>
						<form name="login" action="autentication.php" method="post" >
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
								<a href="index.php" name="cancel" class="cancel button">Cancelar</a>
								<a href="#"
								onClick="document.forms['login'].submit(); return false;"
								name="ok" class="btn button">Ok</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			//introSound.load().play().fadeIn().loop();
		</script>
	</div>