<?php 
include ("topo.php");
//editarVacas.php
if(isset($_POST['id'])){ 
$id = $_POST['id'];
$query = "UPDATE leiteiro SET nVaca='".$_POST['nVaca']."',leitevaca='".$_POST['leitevaca']."',racao='".$_POST['racao']."' WHERE id=".$id."";
	$resultado = mysqli_query($conexao,$query);
}	
	else {
		$id = $_GET['id'];
	}
$sql = "SELECT * FROM leiteiro where id='".$id."'";
		if($result=mysqli_query($conexao, $sql)){
			$row =mysqli_fetch_assoc($result);
		}
?>


<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner2 text-center rounded">


              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Editar</span>
				
				
				
				<form action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $id;?>" method="POST">
				<table border="1" width="600">
					<tr>
						<td>Número da  Vaca</td>
						<td><input type="text" name="nVaca" size="50" value="<?php echo $row['nVaca']?>"></td>
					</tr>
					<tr>
						<td>Litros de Leite</td>
						<td><input type="text" name="leitevaca" maxlength="11" value="<?php echo $row['leitevaca']?>"></td>
					</tr>
					<tr>
						<td>Ração</td>
						<td><input type="text" name="racao" maxlength="11" value="<?php echo $row['racao']?>"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="hidden" name="id" value="<?php echo $id ;?>">
							<input class="btn btn-primary" type="submit" value="cadastrar">
						</td>
					</tr>
				</table>
				</form>
				<?php
				if($resultado == false){
					echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
				}
				else { 
					echo "<h1>Atualizado com sucesso!</h1>";
				}
				
				
				?>

          </div>
        </div>
      </div>
    </section>


			 
          </div>
        </div>
      </div>
    </section>
	
	
	
	
    
<?php include"rodape.php";?>
