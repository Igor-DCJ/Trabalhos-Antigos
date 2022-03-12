<?php session_start(); //processar.php
include("banco.php");
if(isset($_POST['login']))
{
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  echo$sql = "SELECT * FROM usuarios WHERE login = '".$login."' AND senha = '".md5($senha)."'";

  if($result = mysqli_query($conexao, $sql))
  {
		if(mysqli_num_rows($result) == 1)
    {
      $row = mysqli_fetch_assoc($result);
	  $_SESSION["login"] = $row['login'];
      if($row['tipo'] == 1)
      {
        header("Location:comeco.php");
      }
      else
      {
        header("Location:index.php");
      }
    }
  }
  else{
    echo "Login não encontrado!";
  }
}
?>
