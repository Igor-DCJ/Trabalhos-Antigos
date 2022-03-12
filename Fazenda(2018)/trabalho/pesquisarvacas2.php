<?php 
include("topo2.php");

			
if(isset($_POST['pesquisarVaca']))
{
	
$sql = "SELECT * FROM leiteiro WHERE nVaca = '".$_POST['pesquisarVaca']."' OR dataLeite = '".$_POST['pesquisarData']."'";
	//exit();
	if($result = mysqli_query($conexao, $sql))
	{
		if(mysqli_num_rows($result))
		{
			echo"
			<section class='page-section cta'>
      <div class='container'>
        <div class='row'>
          <div class='col-xl-9 mx-auto'>
            <div class='cta-inner2 text-center rounded'>


				<h2 class='section-heading mb-5'>
                <span class='section-heading-lower'>Vacas</span>

			<p align=center>
			<table border=1> 
		<tr>
			<th>Número</th>
			<th>L. de Leite</th>
			<th>Dia do Leite</th>
			
		</tr>";
		while ($row = mysqli_fetch_assoc($result))
		{ 
			echo "<tr>				
				<td>".$row["nVaca"]."</td>
				<td>".$row["leitevaca"]."</td>
				<td>".$row["dataLeite"]."</td>";

			
			echo "</td></tr>
			 </div>
        </div>
      </div>
    </section>";
		}
		echo"</table>";
		}
	else
		{
			echo"Não foi encontrado nenhum cliente.";
		}
	}
}
else
{?>
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner2 text-center rounded">


              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Vacas</span>
				<form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
				<table border="1" width="600" align="center">
					<tr><td>Número da Vaca</td><td><input type="text" name="pesquisarVaca" size="50"></td></tr>
					<tr><td>Dia do Leite</td><td><input type="date" name="pesquisarData" size="50"></td></tr>
					<tr><td colspan="2" align="center"><input class="btn btn-primary" type="submit" value="Pesquisar"></td></tr>
				</table></form></body></html>

          </div>
        </div>
      </div>
    </section>
	
	
	
	
    <section class="page-section about-heading">
    </section>
	<?php
}
mysqli_close($conexao)
?>
<?php
function convercaoData ($dataRecebida)
{
	$novaData = explode("-", $dataRecebida);
	$pedacos = strlen($novaData[0]);
	if($pedacos == 4)
	{
		$dataConvertida = $novaData[2]."/". $novaData[1]."/".$novaData[0];
	}
	else
	{
		$novaData = explode("/", $dataRecebida);
		$dataConvertida = $novaData[2]."-".
		$novaData[1]."-".$novaData[0];
	}
	return $dataConvertida;
}
?>
</section>
<?php include"rodape.php";?>
