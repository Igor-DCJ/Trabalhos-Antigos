	<?php include("topo2.php");?>
 <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/comeco2.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Leite Coletado</span>
              
            </h2>
            <p class="mb-3">
			<?php
			#mostrar clientes 
			$sql ="SELECT * FROM produzido";
			if ($result = mysqli_query($conexao, $sql))
			{ 
				echo"<table border=1> 
					<tr>
						<th>Litros de Leite Coletado</th>
						<th>Qualidade</th>
						<th>Data do Leite</th>
						
					</tr>";
					while ($row = mysqli_fetch_assoc($result))
					{ 
						echo "
						<tr>
							<td>".$row["leitecoletado"]."</td><td>".$row["qualidade"]."</td><td>".$row["dataLeite"]."</td>";
						echo "
					
						</tr>";
					}
					echo"</table>";
			}
			mysqli_close($conexao);
			?>
			
			
			
            </p>
			
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mx-auto">
            <div class="cta-inner2 text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Login</span>
                <span class="section-heading-lower"></span>
              </h2>
              <p class="mb-0">
		<!-------------------Login------------------->
				
	<div align="center">
		  <form method="POST" action="processar.php">
		  <table border="0" class="login" >
		  <tr>
			<td>Login: <input type="text" name="login"> <br></td>
		  </tr>
		  <tr>
			<td>Senha: <input type="password" name="senha"><br></td>
		  </tr>
		  <tr>
			<td align="center">
			  <input class="btn btn-primary" type="submit" value="Entrar">
			
		  </form>
			
		  <a class="btn btn-primary " href="inserir.php">Cadastrar</a>
			</td>
		  </tr>
		  </table>
	</div>
		 
		  
			  
		<!--------------------End-Login------------------->
			  
			  
			  
			  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
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
	$query = "INSERT INTO usuarios(nome,tipo,senha) VALUES ('".$_POST['nome']."','".$_POST['tipo']."','".md5($_POST['senha'])."')";
	if($resultado == false){
		echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
	}
	else{
		echo "<h1>Cadastrado com sucesso!</h1>";
	}
}
?>
<?php
include"rodape.php"
?>