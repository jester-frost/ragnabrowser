<?php
  include("header.php");
?>
<?php
include("connection.php");
?>
<body>
<div class="limit">
	<div class="conteudo">
		<?php 
    		include("stt.php");
    	?>
		<div class="dragme">
			<?php
				$busca = isset( $_POST['busca'] ) ? $_POST['busca'] : null;
				$sql = mysql_query("SELECT * FROM `char` WHERE char_id > 0 ");
				$count = mysql_num_rows($sql);
					if ($count > 0 ) {
						while ($dados = mysql_fetch_array($sql)) {
								// Variaveis para receber os valores encontrados
								for ($i=0; $i < $count; $i++) {
								$char_id = $dados['char_id'];
								$nome = $dados['name'];
								$job = $dados['class'];
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
								$classe = $job;
								}
								// Loop de resultados
								if( "$dados[class]" == "24") 
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
									$classe = "Ninja"; 
								};
						} else {

							echo("Nenhum Resultado encontrado");
						}	
			?>
			<div class='box char_select'>
				<div class='top'>
					<h1><i class='bal-ico'></i>Escolha de Personagem</h1>
				</div>
		      	<div class='carousel main'>
		      		<div class='carousel-inner clearfix jCarouselLite'>
	      				<ul>
	      					<li><a href=""> <div class='obj-char-<?php echo $job ?>'></div></a></li>
	      					<li><a href=""> <div class='obj-char-<?php echo $job ?>'></div></a></li>
	      					<li></li>
	      					<li><a href=""> <div class='obj-char-<?php echo $job ?>'></div></a></li>
	      				</ul>
		      		</div>
		      		<div class='pagination'>
		      			<a href='#'class='left prev'></a>
		      			<a href='#'class='right next'></a>
	                </div>
	                <p class='number'>1<span> / 4</span></p>
	                <div class='total'>
						<p>0 / 4<span> (Used) /(Total)</span></p>
	                </div>
				</div>
				<div class='stats'>
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
				</div>
				<div class='btns clearfix'>
					<button type="submit" class="button white btn-del">Deletar</button>
					<a href="login.php" class="button white cancel">Cancel</a>
					<a href="criar.php" class="button white cancel">Criar</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
  include("footer.php");
?>