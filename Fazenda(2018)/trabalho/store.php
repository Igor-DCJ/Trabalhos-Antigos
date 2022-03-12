<?php include"topo.php";
if(isset($_GET['deletar'])){ //deletar cliente 
				$sql="DELETE FROM leiteiro WHERE id = '".$_GET['deletar']."'";
				$result = mysqli_query($conexao, $sql);
			}
?>
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner2 text-center rounded">


              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Vacas                                  
				<?php
				$sql ="SELECT * FROM leiteiro";
if ($result = mysqli_query($conexao, $sql))
{ 
	echo"<table border=1> 
		<tr>
			<th>Número da Vaca</th>
			<th>Litros de Leite</th>
			<th>Rações</th>
			<th>Data do Leite</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>";
		while ($row = mysqli_fetch_assoc($result))
		{ 
			echo "
			<tr>
				<td>".$row["nVaca"]."</td>
				<td>".$row["leitevaca"]."</td>
				<td>".$row["racao"]."</td>
				<td>".$row["dataLeite"]."</td>";
			echo "
			<td> <a href=\"editarvacas.php?id=".$row["id"]."\">
			<img src=\"img/edit1.png\"></a></td>
			<td><a href=\"".$_SERVER['PHP_SELF']."?deletar=".$row["id"]."\"><img src=\"img/delete.png\" height=\"20\" width=\"20\"></a></td>";
			
			echo "</td></tr>";
		}
		echo"</table>";
}
mysqli_close($conexao);
?>

			  <br>
			<div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="inserirvacas.php" value="novacoleta">Inserir Vaca</a>
              <a class="btn btn-primary btn-xl" href="pesquisarvacas.php" >Pesquisar <i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	
	
	
    
<?php include"rodape.php";?>
