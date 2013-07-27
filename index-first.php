<?php
  include("header.php");
?>


<div class="limit">
  <div class="conteudo">
  <div class="dragme">
    <div class="box servers">

      <div class="top">
        <h1><i class="bal-ico"></i>Seleção de Serviços</h1>
      </div>
      <ul>
        <li class="first"><a href="">Servidor 1</a></li>
        <li><a href="">Servidor 2</a></li>
        <li><a href="">Servidor 2</a></li>
        <li><a href="">Servidor 2</a></li>
      </ul>

      <div class="btns clearfix">
        <input type="submit" onclick="mySound.play();" name="cancel" value="Cancel" class="cancel">
        <input type="submit" onclick="mySound.play();" name="ok" value="ok" class="btn">
      </div>
    </div>
  </div>

	<div class="dragme">
	    <div class="box">
	      <div class="top">
	        
	        <h1><i class="bal-ico"></i>Interface de Login</h1>
	      </div>
	      <form action="">
	        <label for="">Login: 
	          <input type="text"name="login" placeholder="Usuario">
	        </label>
	        <label for="">Senha:
	          <input type="password"name="senha" placeholder="Senha">
	        </label>
	        <div class="btns clearfix">
	      </form>
	      </form>
	      </form>
	        	<input type="button" onclick="mySound.play();" value="Play">
	          <input type="submit" name="ok" value="ok" class="btn">
	        </div>
	      </form>
	    </div>
	</div>

	<div class="dragme">
		<div class="box char_select">
	    	<div class="top">
	        	<h1><i class="bal-ico"></i>Escolha de Personagem</h1>
	    	</div>
	      	<div class="carousel main">
	      		<div class="carousel-inner clearfix jCarouselLite">
	      			<ul>
	      				<li><a href=""><div class="obj-char"></div></a></li>
	      				<li><a href=""><div class="obj-char"></div></a></li>
	      				<li><a href=""></a></li>
	      				
	      			</ul>
	      		</div>
	      		<div class="pagination">
	      			<a href="#"class="left prev"></a>
	      			<a href="#"class="right next"></a>
                </div>
                <p class="number">1<span> / 4</span></p>
                <div class="total">
					<p>0 / 4<span> (Used) /(Total)</span></p>
                </div>
	      	</div>
	      	<div class="stats">
	      			<?php
						$busca = isset( $_POST['busca'] ) ? $_POST['busca'] : null;
						$sql = mysql_query("SELECT * FROM `char` WHERE char_id > 0 ");
						$count = mysql_num_rows($sql);
							if ($count > 0 ) {
								while ($dados = mysql_fetch_array($sql)) {
										// Variaveis para receber os valores encontrados
										$char_id = $dados['char_id'];
										$nome = $dados['name'];
										$classe = $dados['class'];
										$base_level = $dados['base_level'];
										$job_level = $dados['job_level'];
										$str = $dados['str'];
										$agi = $dados['agi'];
										$int = $dados['int'];
										$dex = $dados['dex'];
										$vit =  $dados['vit'];
										$luk = $dados['luk'];
										$hp = $dados['max_hp'];
										$sp = $dados['max_sp'];
										$map = $dados['save_map'];
										$exp = $dados['base_exp'];
										// Loop de resultados
										/*if( "$dados[class]" == "24") 
											$classe = "Gunslinger";
										else if ( "$dados[class]" == "25") 
											$classe = "Ninja";
										else if ( "$dados[class]" == "4") 
											$classe = "Acolyte";
										else if ( "$dados[class]" == "3") 
											$classe = "Archer";
										else if ( "$dados[class]" == "2") 
											$classe = "Magician";
										else if ( "$dados[class]" == "5") 
											$classe = "Merchant";
										else if ( "$dados[class]" == "1") 
											$classe = "Swordman";
										else if ( "$dados[class]" == "6") 
											$classe = "Thief";
										else if ( "$dados[class]" == "4046") 
											$classe = "Taekwon";
										else if ( "$dados[class]" == "23") 
											$classe = "Super Novice";
										else if ( "$dados[class]" == "7") 
											$classe = "knight";
										else if ( "$dados[class]" == "14") 
											$classe = "Cruzader";
										else if ( "$dados[class]" == "9") 
											$classe = "Wizard";
										else if ( "$dados[class]" == "16") 
											$classe = "Sage";
										else if ( "$dados[class]" == "11") 
											$classe = "Hunter";
										else if ( "$dados[class]" == "20") 
											$classe = "Dancer";
										else if ( "$dados[class]" == "19") 
											$classe = "Bard";
										else if ( "$dados[class]" == "8") 
											$classe = "Priest";
										else if ( "$dados[class]" == "15") 
											$classe = "Monk";
										else if ( "$dados[class]" == "10") 
											$classe = "Blacksmith";
										else if ( "$dados[class]" == "18") 
											$classe = "Alchemist";
										else if ( "$dados[class]" == "12") 
											$classe = "Assassin";
										else if ( "$dados[class]" == "17") 
											$classe = "Rogue";
										else if ( "$dados[class]" == "25") 
											$classe = "Ninja"; */

											echo "
											<ul>
							      				<li>$nome</li>
							      				<li class='bfr'>$str</li>
							      				<li>$classe</li>
							      				<li class='bfr'>$agi</li>
							      				<li>$base_level</li>
							      				<li class='bfr'>$vit</li>
							      				<li>$exp</li>
							      				<li class='bfr'>$int</li>
							      				<li>$hp</li>
							      				<li class='bfr'>$dex</li>
							      				<li>$sp</li>
							      				<li class='bfr'>$luk</li>
							      				<li>$map</li>
								      		</ul>
												";
									};

							} else {

								echo("Nenhum Resultado encontrado");
							}
							
						?>
	      	</div>
	        <div class="btns clearfix">
        		<input type="submit" name="ok" value="Cancel" class="cancel">
        		<input type="submit" name="ok" value="Criar" class="btn">
      		</div>
	    </div>
	</div>


	<div class="dragme">
		<div class="box char_make">
	    	<div class="top">
	        	<h1><i class="bal-ico"></i>Criação de Personagem</h1>
	    	</div>
	    	<div class="col">
	    		<div class="carousel ">
	      			<div class="carousel-inner">
			    		<ul>
			      			<div class="obj-char"></div>
			      		</ul>
			      		<form action="">
				      		<label for="">
				      			<input type="text"name="senha" placeholder="Nome " class="char-name">
		        			</label>
	        			</form>
			      	</div>
			      	<div class="pagination">
		      			<a href=""class="left"></a>
		      			<a href=""class="top-arrow"></a>
		      			<a href=""class="right"></a>
                	</div>
			    </div>
	    	</div>
	    	<div class="col">
	    		<div id="hexagon">
				</div>
	    	</div>
	    	<div class="col"></div>

	    	<div class="btns clearfix">

        		<input type="submit" name="ok" value="Cancel" class="cancel">
        		<input type="submit" name="ok" value="Criar" class="btn">
        		<input type="submit" name="ok" value="Deletar" class="btn-del">
      		</div>
	    </div>
	</div>




  </div>
</div>
<?php
  include("footer.php");
?>