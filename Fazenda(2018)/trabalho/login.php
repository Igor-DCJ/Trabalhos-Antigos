<?php 
include "topo.php";
//login.php ?>
<html>
	  <head>
		<title> Sistema Login</title><link rel="stylesheet" type="text/css" href="style.css">
	  </head>
<body>
	<div align="center">
		  <form method="post" action="processar.php">
		  <table border="1" class="login">
		  <tr>
			<td>Login: <input type="text" name="nome"> <br></td>
		  </tr>
		  <tr>
			<td>Senha: <input type="password" name="senha"><br></td>
		  </tr>
		  </table>
		  
		  <br><br>
		  
		  <input type="submit" value="Entrar">
		  </form>
		  <a href="inserir.php"><input type="submit" value="cadastrar"></a>
	</div>
</body>
</html>