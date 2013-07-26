<?php
  include("header.php");
?>
<?php
include("connection.php");
?>
<?php
  session_start();
  if (!isset ($_SESSION["login"]) || !isset ($_SESSION["senha"])) {
    header("location: login.php");
    exit;
  }else {
    $msg = "Logado";
  }
?>
<body>
<div class="limit">
  <div class="conteudo">

  <div class="dragme">
    <div class="box servers">

      <div class="top">
        <h1><i class="bal-ico"></i>Seleção de Serviços</h1>
      </div>
      <ul>
        <li class="first"><a href="login.php">Servidor 1</a></li>
        <li><a href="login.php">Servidor 2</a></li>
        <li><a href="login.php">Servidor 2</a></li>
        <li><a href="login.php">Servidor 2</a></li>
      </ul>

      <div class="btns clearfix">
        <button type="submit" class="button white cancel" >Ok</button>
        <a href="index.php" class="button white cancel">Cancel</a>
      </div>
    </div>
  </div>
  </div>
</div>
<?php
  include("footer.php");
?>