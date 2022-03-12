<?php 
include("topo.php");
if(isset($_GET['deletar'])){ //deletar cliente 
	$sql="DELETE FROM leiteiro WHERE nVaca = '".$_GET['deletar']."'";
	$result = mysqli_query($conexao, $sql);
}
#mostrar vacas 
$sql ="SELECT * FROM leiteiro";
if ($result = mysqli_query($conexao, $sql))
{ 
	echo"<table border=1> 
		<tr>
			<th>Número da Vaca</th>
			<th>Litros de Leite</th>
			<th>Rações</th>
			<th>Data do Leite</th>
			<th>Deletar</th>
		</tr>";
		while ($row = mysqli_fetch_assoc($result))
		{ 
			echo "
			<tr>
				<td>".$row["nVaca"]."</td><td>".$row["leitevaca"]."</td><td>".$row["racao"]."</td><td>".$row["dataLeite"]."</td>";
			echo "
			<td> <a href=\"editarvacas.php?id=".$row["id"]."\"><img src=\"images/edit.gif\"></a></td><td>
			<a href=\"".$_SERVER['PHP_SELF']."?deletar=".$row["nVaca"]."\"><img src=\"images/delete.png\" height=\"20\" width=\"20\"></a></td>";
			
			echo "</td></tr>";
		}
		echo"</table>";
}
mysqli_close($conexao);
?>