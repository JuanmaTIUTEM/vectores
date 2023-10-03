<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Menú Principal
	</title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>
<script type="text/javascript">
	let temp = false;
</script>
<style type="text/css">
	.w-20{
		width: 18%;
		margin: .5%;
		height: auto;	
	}
	.w-80{
		width: 78%;
		margin: .5%;	
	}
	.footer {
		position: fixed;
		height: auto;
		bottom: 0;
		width: 100%;
	}
</style>
<script type="text/javascript">
	function vectors(){}


	
</script>
<body class="d-flex flex-wrap justify-content-center bg-light">
	<main>
		
	</main>
	<section class="container-fluid w-20 border rounded shadow p-2 mb-2 bg-white">
		<div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#arreglos">Arreglos</a>
		  <div id="arreglos" class="collapse container bg-light">
		  	<a href="#" class="list-group-item list-group-item-action" onclick="vectors();">Vectores</a>
		  	  <a href="#" class="list-group-item list-group-item-action" onclick="ordenamientos();">Ordenamiento</a>
		  	  <a href="#" class="list-group-item list-group-item-action" onclick="cp();">Codigos Postales</a>
		  	  <a href="#" class="list-group-item list-group-item-action" onclick="tarea();">Tareas</a>
		  </div>
		  <a href="#" class="list-group-item list-group-item-action">Listas</a>
		  <a href="#" class="list-group-item list-group-item-action">Pilas y Colas</a>
		</div>
		
		
		
	</section>
	
	<section class="container w-80 border rounded shadow p-2 mb-2 bg-white mh-100" id="sectionFiles">
		<div id="cpostales" >
			<?php include 'cpostales.php'; ?>
		</div>
		<div id="ordenamiento" >
			<?php include 'ordenamiento.php'; ?>
		</div>
		<div id="vectores" >
			<?php include 'vectores.php'; ?>
		</div>
		<div id="tareas">
			<?php include 'tareas.php'; ?>
			
		</div>
	</section>


</body>
<footer class="container-fluid footer mt-auto p-1 bg-secondary text-end">
	<p>MSC. Juan Manuel Fernández Alvarez <br>&#169;2023</p>
</footer>

<script type="text/javascript">
	let cpostales = document.getElementById('cpostales');
	let ordenamiento = document.getElementById('ordenamiento');
	let vectores = document.getElementById('vectores');
	$(document).ready(function() {
		$("#cpostales").hide();
		$("#ordenamiento").hide();
		$("#vectores").hide();
		$("#tareas").hide();

	});

	function vectors(){
		if(confirm("¿Desea rellenar matriz de temperaturas?")){
			temperatures();
			
		}
		$("#cpostales").hide();
		$("#ordenamiento").hide();
		$("#tareas").hide();
		$("#vectores").show();
		

	}
	function ordenamientos(){
		
		$("#cpostales").hide();
		$("#tareas").hide();
		$("#ordenamiento").show();
		$("#vectores").hide();
		

	}
	function cp(){
		
		$("#cpostales").show();
		$("#ordenamiento").hide();
		$("#tareas").hide();
		$("#vectores").hide();
		

	}
	function tarea(){
		
		$("#cpostales").hide();
		$("#ordenamiento").hide();
		$("#tareas").show();
		$("#vectores").hide();
		

	}



	
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</html>