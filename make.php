<?php
	include("header.php");
?>

<div class="limit">
	<div class="conteudo">
			<div class="centralizar-big">
			<div class="dragme">
				<div class="box char_make">
			    	<div class="top">
			        	<h1><i class="bal-ico"></i>Criação de Personagem</h1>
			    	</div>
			    	<div class="col">
			    		<div class="carousel main">
			      			<div class="carousel-inner">
					    		<ul class="cabelos">
					    			<li><div class="obj-cabelo-1"></li>
					    			<li><div class="obj-cabelo-2"></li>
					    			<li><div class="obj-cabelo-3"></li>
					    			<li><div class="obj-cabelo-4"></li>
					      		</ul>
					      		<div class="obj-char"></div>
					      		<form action="">
						      		<label for="">
						      			<input type="text"name="senha" placeholder="Nome " class="char-name">
				        			</label>
			        			</form>
					      	</div>
					      	<div class="pagination">
				      			<a href=""class="left prev"></a>
				      			<a href=""class="top-arrow"></a>
				      			<a href=""class="right next"></a>
		                	</div>
					    </div>
			    	</div>
			    	<div class="col">

						<svg x="0px" y="0px" viewBox="0 0 612 792" id="object">
							<polygon 
							points="306,531 175,455 175,304 306,229 436,304 436,455"
							id="poligon"/>
						</svg>
			    	</div>
			    	<div class="col">
			    		<ul class="stats-make">
			    			<li id="stat_str">5</li>
			    			<li id="stat_agi">5</li>
			    			<li id="stat_vit">5</li>
			    			<li id="stat_inte">5</li>
			    			<li id="stat_dex">5</li>
			    			<li id="stat_luk">5</li>
			    		</ul>
			    	</div>

		      		<div class="btns clearfix">
		      			<button class="btnstr"></button>
						<button class="btnagi"></button>
						<button class="btnvit"></button>
						<button class="btnint"></button>
						<button class="btndex"></button>
						<button class="btnluk"></button>
		        		<a href="select.php" name="ok" class="cancel button">Cancelar</a>
		        		<a href="make.php" name="ok" class="btn button">Criar</a>
	      			</div>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php
  include("footer.php");
?>