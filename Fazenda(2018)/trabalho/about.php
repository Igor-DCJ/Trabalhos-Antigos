<?php include"topo.php";
if(isset($_GET['deletar'])){ //deletar cliente 
				$sql="DELETE FROM lembretes WHERE id = '".$_GET['deletar']."'";
				$result = mysqli_query($conexao, $sql);
			} ?>
    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about9.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-lower">Anotações</span>
                </h2>
				
                <?php
							$sql ="SELECT * FROM lembretes";
			if ($result = mysqli_query($conexao, $sql))
			{ 
				while ($row = mysqli_fetch_assoc($result))
				{ 
					echo "Dia
						".$row["dialembrete"]."
						".$row["dialembrete"]."
						<a href=\"".$_SERVER['PHP_SELF']."?deletar=".$row["id"]."\"><img src=\"img/delete.png\" height=\"20\" width=\"20\"></a>
						<br>".$row["anotacoes"]."
						<hr color='black'>";
					
				
					
				}
		}
		mysqli_close($conexao);
		?>
			<h2 class="section-heading mb-4">
                  
                  <span class="section-heading-lower"></span>
                </h2>
                <p>
					<form action="#" method="POST">

					<input type="text" name="anotacoes" maxlength="800"><br>

					<input  type="submit" value="Anotar">
					
					</form>
					
					<?php
						$servidor = "localhost";
						$usuario = "root";
						$senha = "";
						$bd = "fazenda";
						if(isset($_POST['anotacoes'])){
							$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
							$dialembrete = date("Y-m-d,",time());
							$query = "INSERT INTO lembretes(anotacoes,dialembrete) VALUES ('".$_POST['anotacoes']."','".$dialembrete."')";
							$resultado = mysqli_query($conexao,$query);
							
						}
					?>
					
					
					
                </p>
		
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
<?php
include"rodape.php"
?>