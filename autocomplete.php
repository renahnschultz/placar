<?php 
require('connection.php');

// Recebe os parâmetros enviados via GET
$acao = (isset($_POST['acao'])) ? $_POST['acao'] : '';
$parametro = (isset($_POST['parametro'])) ? $_POST['parametro'] : '';

// Verifica se foi solicitado uma consulta para o autocomplete
if($acao == 'autocomplete'):
	$sql = "SELECT * FROM clube WHERE nome LIKE '%".$parametro."%' ORDER BY nome ASC LIMIT 15";

	$result = mysqli_query($connection,$sql);

	$response = array();
	while($row = mysqli_fetch_array($result) ){
	  $response[] = array("value"=>$row['id'],"label"=>$row['nome']);
	}
	echo json_encode($response);
endif;
?>