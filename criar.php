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
			<div class="box char_make">
		    	<div class="top">
		        	<h1><i class="bal-ico"></i>Criação de Personagem</h1>
		    	</div>
		    	<div class="col">
		    		<div class="carousel ">
		      			<div class="carousel-inner">
				    		<ul>
				      			<div class="obj-char-"></div>
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
		    		<svg x="0px" y="0px" viewBox="0 0 612 792" id="object">
						<polygon 
						points="306,531 175,455 175,304 306,229 436,304 436,455"
						id="poligon"/>
					</svg>
		    	</div>
		    	<div class="col">
		    		

		    	</div>

		    	<div class="btns clearfix">
		    		<button onclick="adcstr()">FORCA</button>
					<button onclick="adcagi()">AGILIDADE</button>
					<button onclick="adcvit()">VITALIDADE</button>
					<button onclick="adcint()">INTELIGENCIA</button>
					<button onclick="adcdex()">DEXTREZA</button>
					<button onclick="adcluk()">SORTE</button>	
		    		<a href="selecionar.php" class="button white cancel">Cancel</a>
		    		<button type="submit" class="button white cancel">Criar</button>
		  		</div>
		    </div>
		</div>
	</div>
</div>
<?php
  include("footer.php");
?>