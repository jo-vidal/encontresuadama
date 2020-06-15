<?php
require_once("conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Meus Dados</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://todos.siteoficial.ws/encontresuadama.com.br/estilo.css">
  <link rel="stylesheet" type="text/css" href="estilo.php">
  <link href='https://fonts.googleapis.com/css?family=Euphoria%20Script:400' rel='stylesheet' type='text/css'>

    <img src ="https://yata-apix-a1760502-bb74-4e43-ac5f-2d5af2888d10.lss.locawebcorp.com.br/08185b5a9c024272be62d7c708498803.png" width="940">
  <nav id="menu">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="dados.php">Meus dados</a></li>
      <li><a href="up.php">Meus Uploads</a></li>
      <ul style="text-align: right;">
          <li>
            <?php
            $login_cookie = $_COOKIE['login'];
            if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie <br>";
            echo " <a href='sair.php'>Sair</a>"; } ?>
          </li>
      </ul> </ul>
    </nav>
</head>
<body>
	<h1>Seus Dados:</h1>
<?
$conecta = mysql_connect('todossim.mysql.dbaas.com.br', 'todossim', 'Todos@100') or print (mysql_error());
mysql_select_db('todossim', $conecta) or print(mysql_error());

$sql = "SELECT * FROM usuarios WHERE login = '$login_cookie'"; 
$result = mysql_query($sql, $conecta);

while($consulta = mysql_fetch_array($result)) { 
   print "<label>Usuário:</label> $consulta[login] <br> <label>Nome:</label> $consulta[nome] <br> <label>Sobrenome:</label> $consulta[sobrenome] <br> <label>Email:</label> $consulta[email] <br> <label>Senha:</label> ********** <br> <label>Sexo:</label> $consulta[sexo] <br>"; 
} 

mysql_free_result($result); 
mysql_close($conecta); 
?>
<footer class = "rodape">
  <img src ="https://yata2.lss.locawebcorp.com.br/fd5702ff5551981dd92d646e34f76388fe21a43afc01cf1b1c77ae897aa7c13f" width="110" height="110">
  <p style="text-align:center"><span style="color:#7f8c8d">Entre em contato: projeto@todos.siteoficial.ws</span></p>
  <p style="text-align:center"><span style="color:#696969"><span style="font-size:11px">ENCONTRE SUA DAMA&nbsp;&copy; 2019. &nbsp;CRIADO PELOS FORMANDOS DE ADS</span></span></p>
</footer>
  </body>
</html>