<?php
	include("header.php");
?>
<div id="map" id="map" onclick="getMouse(event)">
	
<div class="dragme">
	<div class="box char-infos">
		<nav class="info-botoes">
			<ul>
				<li><a href="" class="btnsc button">Info</a></li>
				<li><a href="" class="btnsc button">Skill</a></li>
				<li><a href="" class="btnsc button">Item</a></li>
				<li><a href="" class="btnsc button">Map</a></li>
				<li><a href="" class="btnsc button">Party</a></li>
				<li><a href="" class="btnsc button">Guild</a></li>
				<li><a href="" class="btnsc button">Quest</a></li>
				<li><a href="" class="btnsc button">Option</a></li>
				<li><a href="" class="btnsc button">Booking</a></li>
			</ul>
		</nav>
    </div>
</div>

<div class="dragme">
	<div class="box skill-shortcut">
		<div class="barras">
	    	<div class="barra-1">
	    		<div>F1</div>
	    		<div>F2</div>
	    		<div>F3</div>
	    		<div>F4</div>
	    		<div>F5</div>
	    		<div>F6</div>
	    		<div>F7</div>
	    		<div>F8</div>
	    		<div>F9</div>
	    	</div>
	    	<div class="barra-2">
	    		<div>F1</div>
	    		<div>F2</div>
	    		<div>F3</div>
	    		<div>F4</div>
	    		<div>F5</div>
	    		<div>F6</div>
	    		<div>F7</div>
	    		<div>F8</div>
	    		<div>F9</div>
	    	</div>
	    	<div class="barra-3">
	    		<div>F1</div>
	    		<div>F2</div>
	    		<div>F3</div>
	    		<div>F4</div>
	    		<div>F5</div>
	    		<div>F6</div>
	    		<div>F7</div>
	    		<div>F8</div>
	    		<div>F9</div>
	    	</div>
    	</div>
    	<div class="barra-control">
    		<a href="#" class="up" >▲</a>
    		<a href="#" class="down">▼</a>
    	</div>
    </div>
</div>

	<div class="dragme">
		<div class="chat-char">

			<nav class="chat-abas">
				<ul>
					<li class="active global" ><a href="#">Chat Global</a></li>
					<li class="grupo"><a href="#">Grupo</a></li>
					<li class="guilda"><a href="#">Guilda</a></li>
				</ul>
			</nav>

			<div class="chat-top" id="public">
				<p class="conversation">Biro Biro: <cite class="speaked">
					Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
				</cite></p>
				<p class="conversation">Mussum: <cite class="speaked">
					Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.
				</cite></p>
				<p class="guild-msg-chat">Membro da Guilda: Biro Master <cite class="speaked">Vamo Owna na WOE KRL !!</cite></p>
				<p class="global-msg">Ajude o Servidor Vóte Diáriamente!</p>
				<p class="guild-msg">Biro Biro MK Se conectou.</p>
				<p class="debuff-msg">Bênção foi Cancelada.</p>
				<p class="debuff-msg">Seu dano foi diminuido.</p>
				<p class="debuff-msg">Sua velocidade voltou ao normal.</p>
				<p class="conversation">Biro Biro: <cite class="speaked">Da Buff ae FDP !!</cite></p>
				<p class="conversation">SR Julius: <cite class="speaked">Vai se foder !</cite></p>
				<p class="conversation">Biro Biro: <cite class="speaked">Vai bicha! buffa logo</cite></p>
				<p class="conversation">SR Julius: <cite class="speaked">Espera poha !!!</cite></p>
				<p class="guild-msg">Biro Biro MK Se desconectou.</p>
				<p class="buff-msg">Sua Agilidade foi Aumentada.</p>
				<p class="buff-msg">Improviso de Manus Ativado.</p>
				<p class="guild-msg-chat">Membro da Guilda: Biro Master <cite class="speaked">Fala Rapaziada!</cite></p>
				<p class="conversation">Biro Biro: <cite class="speaked">Vai logo mano o bicho ta curando !!</cite></p>
				<p class="conversation">SR Julius: <cite class="speaked">Calma caralho sem pedra poha!!</cite></p>
				<p class="party-msg">Autarca: <cite class="speaked">Em que mapa vocês estão?</cite></p>
				<p class="conversation">Unknow User: <cite class="speaked">Eduardo Menininha </cite></p>
			</div>
			<div class="chat-top hidden" id="guild">
				<p class="guild-msg-chat">Membro da Guilda: Biro Master <cite class="speaked">Vamo Owna na WOE KRL !!</cite></p>
				<p class="guild-msg">Biro Biro MK Se conectou.</p>
				<p class="debuff-msg">Bênção foi Cancelada.</p>
				<p class="debuff-msg">Seu dano foi diminuido.</p>
				<p class="debuff-msg">Sua velocidade voltou ao normal.</p>
				<p class="guild-msg">Biro Biro MK Se desconectou.</p>
				<p class="buff-msg">Sua Agilidade foi Aumentada.</p>
				<p class="buff-msg">Improviso de Manus Ativado.</p>
				<p class="guild-msg-chat">Membro da Guilda: Biro Master <cite class="speaked">Fala Rapaziada!</cite></p>
			</div>
			<div class="chat-top hidden" id="party">
				<p class="debuff-msg">Bênção foi Cancelada.</p>
				<p class="debuff-msg">Seu dano foi diminuido.</p>
				<p class="debuff-msg">Sua velocidade voltou ao normal.</p>
				<p class="buff-msg">Sua Agilidade foi Aumentada.</p>
				<p class="buff-msg">Improviso de Manus Ativado.</p>
				<p class="party-msg">Autarca: <cite class="speaked">Em que mapa vocês estão?</cite></p>
				<p class="party-msg">Biro: <cite class="speaked">to morto nessa poha ! baphomet cuzão</cite></p>
				<p class="party-msg">Sr Julius: <cite class="speaked">hehEUhEUEHhuEhhEu se fóde ae nerdão</cite></p>
			</div>
			<div class="inputs-chat">
				<input type="text" class="destinatario">
				<a href=""class="combo-destinatario">|</a>
				<input type="text" class="mensagem">
				<a href="" class="link-ball"></a>
				<a href="" class="link-ball"></a>
			</div>
		</div>
	</div>		
</div>
	<div id="char" class="kagerou" classe="kagerou"></div>
</div>
<?php
  include("footer.php");
?>