	<?php include("topo.php");?>
 <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/comeco2.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Leite Coletado</span>
              
            </h2>
            <p class="mb-3">



<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
			<form action="#" method="POST">
				<div align="center">
					<table border="0">
						<tr>
							<td>Leite Coletado</td>
							<td><input type="text" name="leitecoletado" size="5"></td>
						</tr>	
						<tr>
							<td>Qualidade</td>
							<td><input type="text" name="qualidade" size="5"></td>
						</tr>	
						<tr>
						</tr>
					</table>
				</div>	
							<div class="intro-button mx-auto">
							<td colspan="2" align="center"><input class="btn btn-primary btn-xl" type="submit" value="inserir"></td>
							</div>
			</form>
            </p>
			<?php
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$bd = "fazenda";
			if(isset($_POST['leitecoletado'])){
				$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
				$dataLeite = date("Y-m-d,",time());
				$query = "INSERT INTO produzido(leitecoletado,qualidade,dataLeite) VALUES ('".$_POST['leitecoletado']."','".$_POST['qualidade']."','".$dataLeite."')";
				$resultado = mysqli_query($conexao,$query);
				if($resultado == false){
					echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
				}
				else{
					echo "<h1>Cadastrado com sucesso!</h1>";
				}
			}
			?>
          </div>
        </div>
      </div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------->
	
	
	
</section>
    <section>
      
    </section>
<?php
include"rodape.php"
?>