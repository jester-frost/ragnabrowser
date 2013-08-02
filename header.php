<!doctype html>
<!--hacks para navegadores Internet Explorer -->
    <!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <html lang="en">
    <!--<![endif]-->
    
<head>
    <meta charset="UTF-8">
	<title>Ragnarok Online - In Browser</title>
    <!--Descrições e autor -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--compatibilidade para IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icones da pagina -->
    <link href='imagens/favicon.ico' rel='shortcut icon'/>
    <link href='imagens/favicon.png' rel='icon' type='image/png'/>
    <link href="./imagens/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="./imagens/favicon.ico" type="image/x-icon" rel="icon">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--Folha de estilos em cascata-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/logado.css">
    <!--Script para mover as Divs-->
    
    <script src="./scripts/jquery-1.10.1.min.js"></script>
    <script src="./scripts/functions.js" type="text/javascript"></script>
    <script src="./js/autentication.js" type="text/javascript"></script>
    <script src="./js/lib.min.js" type="text/javascript" ></script>
    <script src="./js/script_jcarousellite.js"  type="text/javascript"></script>
    <script src="./js/buzz.js" type="text/javascript"></script>
    <script type="text/javascript">
    var mySound = new buzz.sound( "./sounds/click", {
        formats: [ "ogg", "mp3", "acc", "wav"]
    });
    </script> 
    <script type="text/javascript" src="./js/jquery-collision.min.js"></script>
    <script type="text/javascript" src="./js/js.js"></script>
</head>
<body onload="ini()">