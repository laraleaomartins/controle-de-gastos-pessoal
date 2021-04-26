<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logado</title>
</head>
<body>
	<h1 align="center">Controle de gastos:</h1>

		<div align="center">

			<form method="post" action="painelprocessamento.php">
					<label>Tipo de gasto:</label>
					<input type="text" name="tipo_de_gasto" placeholder="Tipo de gasto">
					<label>Gasto:</label>
					<input type="tex" name="gasto" placeholder="Gasto">
					<input type="submit" value="Salvar" name="salvar"><br><br>

					<table width="50%" align="center">
						<tr>
							<th>ID gasto</th>
							<th>Tipo de gasto</th>
							<th>Gasto</th>
						</tr>
						<tr>
								<td>
								<div align="center">
									<?php
											$ID_gastos = "SELECT id_gastos FROM tb_gastos";
	
											$query5 = mysqli_query($conexao, $ID_gastos);

											$rows = mysqli_num_rows($query5);

											if ($rows > 0){

												while ($linha = mysqli_fetch_array($query5)) {
													$id_gastos_linha = $linha['id_gastos'];
													echo '<table border="solid" width="100%">
															<tr>
																<td align="center" height="21">
																	'.$ID_gastos . '
																</td>
															</tr>
														</table>';
												}
											}else{
												echo '<table border="solid" align="center" width="60%">
															<tr>
																<td align="center">
																	 Ainda não existem registos
																</td>
															</tr>
														</table>';
											};
									?>
								</div>

							</td>
							<td>
								<div align="center">
									<?php
											$listar_tipo_de_gastos = "SELECT tipo_de_gasto FROM tb_gastos";
	
											$query4 = mysqli_query($conexao, $listar_tipo_de_gastos);

											$rows = mysqli_num_rows($query4);

											if ($rows > 0){

												while ($linha = mysqli_fetch_array($query4)) {
													$tipo_de_gasto_linha = $linha['tipo_de_gasto'];
													echo '<table border="solid" width="100%">
															<tr>
																<td align="center" height="21">
																	'.$tipo_de_gasto_linha . '
																</td>
															</tr>
														</table>';
												}
											}else{
												echo '<table border="solid" align="center" width="60%">
															<tr>
																<td align="center">
																	 Ainda não existem registos
																</td>
															</tr>
														</table>';
											};
									?>
								</div>

							</td>
								<td>
									<div align="center">
										<?php
											$listar_gastos = "SELECT gasto FROM tb_gastos";
	
											$query3 = mysqli_query($conexao, $listar_gastos);

											$rows = mysqli_num_rows($query3);

											if ($rows > 0){

												while ($linha = mysqli_fetch_array($query3)) {
													$gasto_linha = $linha['gasto'];
													echo '<table border="solid" width="100%">
															<tr>
																<td align="center" width="50%">
																	'.$gasto_linha . '
																</td>
																<td align="center">
																	<input type="submit" value="Excluir" name="excluir">
																</td>
															</tr>
																</table>';
												}
											}else{
												echo '<table border="solid" align="center" width="60%">
															<tr>
																<td align="center">
																	 Ainda não existem registos
																</td>
															</tr>
														</table>';
											};
                            			?>
									</div>
								</td>
						</tr>
						<tr>
							<th>Total:</th>
							<td colspan="2">
								<div align="center">
									<?php
										$total_gastos = "SELECT sum(gasto) FROM tb_gastos";
	
											$query5 = mysqli_query($conexao, $total_gastos);

											$rows = mysqli_num_rows($query5);

											if ($rows > 0){

												while ($linha = mysqli_fetch_array($query5)) {
													$gasto_total = $linha['sum(gasto)'];
													echo $gasto_total;
													echo '<hr>';
												}
											}else{
												echo "Ainda não existem registos";
											};
									?>
								</div>
							</td>
						</tr>
					</table>

			</form>
		</div>


</body>
</html>