<?php //bd/topo.php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "fazenda";
$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
if(mysqli_connect_errno()){
	printf("Conexão falhou: %s/n",mysqli_connect_error());
	exit();
}
?>
<!DOCTYPE php>
<php lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
	<style>
	.cta-inner2{position:relative;padding:3rem;margin:.5rem;background-color:rgba(255,255,255,.85)}
	.cta .cta-inner2:before{border-radius:.5rem;position:absolute;top:-.5rem;bottom:-.5rem;left:-.5rem;right:-.5rem;border:.25rem solid rgba(255,255,255,.85)}
	</style>

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Gerencia de Leite</span>
      <span class="site-heading-lower"></span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            
			<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Coletas de Leite
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store2.php">Vacas de Leite</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about2.php">Lembretes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
