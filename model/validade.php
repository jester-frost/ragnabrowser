<?php
if(!empty($_POST) AND (empty($_POST['login'])) OR (empty($_POST['senha'])) ) {
    echo('<script type="text/javascript">alert("Login ou senha incorreta")</script>');
}
else{
$host ='localhost';
$login_db ='root';
$senha_db ='vertrigo';
$db = mysql_connect ($host, $login_db, $senha_db);
$basedados = mysql_select_db($database);
$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login' AND senha = '$senha'", $db);
$contagem = mysql_num_rows($confirmacao);
}
?>