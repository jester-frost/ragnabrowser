
<?php
	include("header.php");
	include("stt.php");
?>
<div class="limit">
	<div class="conteudo">
		<div class="dragme">
			<div class="box char_select">
		    	<div class="top">
		        	<h1><i class="bal-ico"></i>Escolha de Personagem</h1>
		    	</div>
		      	<div class="carousel main">
		      		<div class="carousel-inner clearfix jCarouselLite">
		      			<ul id="char-select-list">
		      				<li class="block-1"><a href="#" class="char-block"><div class="obj-char"></div></a></li>
		      				<li class="block-2"><a href="#" class="char-block"><div class="obj-char"></div></a></li>
		      				<li class="block-3"><a href="#" class="char-block"></a></li>
		      				<li class="block-4"><a href="#" class="char-block"></a></li>
		      				<li class="block-5"><a href="#" class="char-block"></a></li>
		      				<li class="block-6"><a href="#" class="char-block"><div class="obj-char"></div></a></li>
		      				<li class="block-7"><a href="#" class="char-block"></a></li>
		      				<li class="block-8"><a href="#" class="char-block"></a></li>
		      				<li class="block-9"><a href="#" class="char-block"></a></li>
		      				<li class="block-10"><a href="#" class="char-block"><div class="obj-char"></div></a></li>
		      				<li class="block-11"><a href="#" class="char-block"><div class="obj-char"></div></a></li>
		      				<li class="block-12"><a href="#" class="char-block"></a></li>
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
					<ul>
	      				<li><?echo '$nome' ?></li>
	      				<li class='bfr'><?echo '$str' ?></li>
	      				<li><?echo '$classe' ?></li>
	      				<li class='bfr'><?echo '$agi' ?></li>
	      				<li><?echo '$base_level' ?></li>
	      				<li class='bfr'><?echo '$vit' ?></li>
	      				<li><?echo '$exp' ?></li>
	      				<li class='bfr'><?echo '$int' ?></li>
	      				<li><?echo '$hp' ?></li>
	      				<li class='bfr'><?echo '$dex' ?></li>
	      				<li><?echo '$sp' ?></li>
	      				<li class='bfr'><?echo '$luk'?></li>
	      				<li><?echo '$map' ?></li>
					</ul>				
		      	</div>
		        <div class="btns clearfix">
	        		<a href="login.php" name="ok" class="cancel button">Cancelar</a>
	        		<a href="make.php" name="ok" class="btn button">Criar</a>
	        		<a href="#" name="ok" class="delet button">Deletar</a>
	      		</div>
		    </div>
		</div>
	</div>
</div>
<?php
  include("footer.php");
?>