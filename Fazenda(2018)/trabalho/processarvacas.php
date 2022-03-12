<?php //processar.php
include("banco.php");
if(isset($_POST['nome']))
{
  $nome = $_POST['nome'];
  $sql = "SELECT * FROM leiteiro WHERE nVaca = '".$nVaca."'";

  if($result = mysqli_query($conexao, $sql))
  {
		if(mysqli_num_rows($result) == 1)
    {
      $row = mysqli_fetch_assoc($result);
      if($row['tipo'] == 1)
      {
        header("Location: index1.php");
      }
      else
      {
        header("Location: index2.php");//a diferença pode ser que a do adm tenha o include que permita modificar
      }
    }
  }
  else{
    echo "Login não encontrado!";
  }
}
?>
