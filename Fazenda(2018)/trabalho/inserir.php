
<?php include"topo2.php";?>
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner2 text-center rounded">


              <h2 class="section-heading mb-5">
                <span class="section-heading-lower">Vacas                                  
				<form action="#" method="POST">
	<div align="center">
		<table border="1" width="600">
			<tr>
				<td>Login</td>
				<td><input type="text" name="login" size="50"></td>
			</tr>		
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha"></td>
			</tr>
			<tr><!--
				<td>Tipo:</td>
				<td><select name="tipo">
					<option value="1">Adiminstrador</option>
					<option value="2">Gado</option>
				</select></td>
			</tr>		
			<tr>-->
				<td colspan="2" align="center"><input class="btn btn-primary" type="submit" value="cadastrar"></td>
			</tr>
		</table>
	</div>	
</form>
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "fazenda";
if(isset($_POST['login'])){
	$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
	$query = "INSERT INTO usuarios(login,senha) VALUES ('".$_POST['login']."','".md5($_POST['senha'])."')";
	$resultado = mysqli_query($conexao,$query);
	if($resultado == false){
		echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
	}
	else{
		echo "<h1>Cliente cadastrado com sucesso!</h1>";
	}
}
mysqli_close($conexao);
?>
          </div>
        </div>
      </div>
    </section>
	
	
	
	
    
<?php include"rodape.php";?>
