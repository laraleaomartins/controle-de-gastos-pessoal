<?php
	include_once("conexao.php");

	$gasto = $_POST['gasto'];
	$tipo_de_gasto = $_POST['tipo_de_gasto'];
	$id_gastos = "SELECT id_gastos FROM tb_gastos";

			function get_post_action($name){
			    $params = func_get_args();

			    foreach ($params as $name) {
			        if (isset($_POST[$name])) {
			            return $name;
			        }
			    }
			}

	switch (get_post_action('salvar', 'excluir')) {
	    case 'salvar':

	       $query_gasto = "INSERT INTO tb_gastos(gasto, tipo_de_gasto, gasto_dia)VALUES('{$gasto}', '{$tipo_de_gasto}', NOW())";
			$query2 = mysqli_query($conexao, $query_gasto);
			header('Location: painel.php');

	        break;

	    case 'excluir':
	        $query_delete = "DELETE FROM tb_gastos WHERE id_gastos = '$id_gastos'";
	        $query_delete1 = mysqli_query($conexao, $query_delete);
	        header('Location: painel.php');

	        break;
	}

?>