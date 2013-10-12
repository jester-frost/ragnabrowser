
	// Declaração de Variáveis

	var express  = require("express");
	var servidor = express();
	var porta    = 8080;

	// Diretório de Templates
	servidor.set('views', __dirname + '/templates');
	// Motor de Templates
	servidor.set('view engine', 'jade');
	servidor.set('jade', require('jade') . __express);

	// Página Inicial
	servidor.get('/', function(req,res) {
		res.render('inicial');
	});

	// Diretório dos Arquivos Publicos
	servidor.use(express.static(__dirname + 'public/'));

	// Variável de Conexão
	var con = require('socket.io').listen(servidor.listen(porta));

	// Conexões

	con.sockets.on ('connection', function (socket) {

		socket.emit('mensagem', { mensagem: 'Usuário Logado com Sucesso'});

		// Roteamento de Mensagens
		socket.on('chat', function (data){
			con.sockets.emit('chat', data);
		});

		// Roteamento de Movimentos
		socket.on('move', function (data){
			con.sockets.emit('move', data);
		});


	});

	console.log("Servidor Rodando na porta " + porta);
