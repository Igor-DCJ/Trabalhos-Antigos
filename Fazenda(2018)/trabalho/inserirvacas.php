
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
                <span class="section-heading-lower">Inserir Vacas</span>
				
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<form action="#" method="POST">
	<div align="center">
		<table border="1" width="600">
			<tr>
				<td>Nº da Vaca</td>
				<td><input type="text" name="nVaca" size="5"></td>
			</tr>		
			<tr>
				<td>Litros de Leite</td>
				<td><input type="text" name="leitevaca"></td>
			</tr><tr>
				<td>Rações:</td>
				<td><input type="text" name="racao"></td>
			</tr>
			<tr>
				<div class="intro-button mx-auto">
					<td colspan="2" align="center"><input class="btn btn-primary" type="submit" value="cadastrar"></td>
				</div>
			</tr>
			
		</table>
	</div>	
</form>
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



<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "fazenda";
if(isset($_POST['nVaca'])){
	$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
	$dataLeite = date("Y-m-d,",time());
	$query = "INSERT INTO leiteiro(nVaca,leitevaca,racao,dataLeite) VALUES ('".$_POST['nVaca']."','".$_POST['leitevaca']."','".$_POST['racao']."','".$dataLeite."')";
	$resultado = mysqli_query($conexao,$query);
	if($resultado == false){
		echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
	}
	else{
		echo "<h1>Cadastrado com sucesso!</h1>";
	}
}

?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
				
              
            </div>
			
          </div>
        </div>
      </div>
    </section>
[
<?php include"rodape.php";?>
