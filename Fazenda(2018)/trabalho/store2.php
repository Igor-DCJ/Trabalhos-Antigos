<?php include"topo2.php";
			
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
	echo"<p align='center'><table border=1> 
		<tr>
			<th>Número da Vaca</th>
			<th>Litros de Leite</th>
			<th>Rações</th>
			<th>Data do Leite</th>
			
		</tr>";
		while ($row = mysqli_fetch_assoc($result))
		{ 
			echo "
			<tr>
				<td>".$row["nVaca"]."</td>
				<td>".$row["leitevaca"]."</td>
				<td>".$row["racao"]."</td>
				<td>".$row["dataLeite"]."</td>";
			
			echo "</td></tr>";
		}
		echo"</table>";
}
mysqli_close($conexao);
?>

			  <br>
			<div class="intro-button mx-auto">

              <a class="btn btn-primary btn-xl" href="pesquisarvacas2.php" >Pesquisar <i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
	
	
	
	
    
<?php include"rodape.php";?>
