<?php
	$empresa = new Empresa;
	$datos=$empresa->listar($key);
?>
<div class="container">
	<table border="1px">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>RFC</th>
				<th>ESTATUS</th>
			</tr>
		</thead>
		<tbody>
			<?php
				/**/
				foreach ($datos as $k) {
					echo '
						<tr>
							<td>'.$k->nombre.'</td>
							<td>'.$k->rfc.'</td>
							<td>'.$k->status.'</td>
						</tr>
					';
				}
				/**/
			?>
		</tbody>
	</table>
</div>