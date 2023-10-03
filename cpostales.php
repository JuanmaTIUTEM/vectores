	
	<?php 

		include "conection.php";


	 ?>

	<div class="d-flex flex-wrap justify-content-center border">
		<section class="container shadow p-4 mb-4 border rounded m-3 bg-light" id="tittle">
			<h1 class="text-center">Listado de Códigos Postales de México <hr></h1>
			<div class="d-flex flex-wrap justify-content-center flex-column">
				<div class="table table-responsive" id="allData">

					<table class="table table-bordered table-hover table-dark" id="tblCodes">
						<thead>
							<tr>
								<th>#</th>
								<th>Estado</th>
								<th>Municipio</th>
								<th>Ciudad</th>
								<th>Zona</th>
								<th>Código Postal</th>
								<th>Colonia</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<tbody>
							<?php 

							$porPagina = 25; // Número de registros por página
							$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Página actual

							// Calcular el offset (desplazamiento)
							$offset = ($paginaActual - 1) * $porPagina;

							// Consulta SQL
							$sql = "SELECT * FROM codpos LIMIT $offset, $porPagina";
							$resultado = $mysqli->query($sql);

							// Obtener el número total de registros
							$sqlTotal = "SELECT COUNT(*) AS total FROM codpos";
							$totalResultados = $mysqli->query($sqlTotal)->fetch_assoc()['total'];

							// Calcular el número total de páginas
							$totalPaginas = ceil($totalResultados / $porPagina);
								
							while ($cp = $resultado->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $cp['Id_dirMex']."</td>";
								echo "<td>" . $cp['estado']."</td>";
								echo "<td>" . $cp['municipio']."</td>";
								echo "<td>" . $cp['ciudad']."</td>";
								echo "<td>" . $cp['zona']."</td>";
								echo "<td>" . $cp['cp']."</td>";
								echo "<td>" . $cp['colonia']."</td>";
								echo "<td>" . $cp['tipo']."</td>";
								echo "</tr>";
							}

							 ?>
							
						</tbody>
					</table>


					<ul class="pagination d-flex flex-wrap justify-content-around">
					    <?php if ($paginaActual > 1): ?>
					        <li class="page-item"><a class="page-link" href="?pagina=<?php echo $paginaActual - 1; ?>">Anterior</a></li>
					    <?php endif; ?>
					    <!--<div class="d-flex flex-wrap justify-content-around" style="width:90%">
					    	<?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
					    		<div>
					    			<li class="page-item"><a class="page-link" href="?pagina=<?php echo $i; ?>" <?php echo ($i == $paginaActual) ? 'class="activo"' : ''; ?>><?php echo $i; ?></a></li>
					    		</div>
					    	    
					    	<?php endfor; ?>
					    </div>-->
					   

					    <?php if ($paginaActual < $totalPaginas): ?>
					        <li class="page-item"><a class="page-link" href="?pagina=<?php echo $paginaActual + 1; ?>">Siguiente</a></li>
					    <?php endif; ?>
					</ul>
					
					    
				</div>
				
			</div>
		</section>

		
	</div>


