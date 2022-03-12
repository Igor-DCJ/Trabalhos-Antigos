<?php //banco.php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "fazenda";
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n",
    mysquli_connect_error());
    exit();
}
?>
