<section class="container-fluid bg-light">
	<div class="d-flex flex-wrap justify-content-center">
		<div class="p-2">
			<h2 class="text-center">Arreglos con Java<hr></h2>
		</div>
	</div>
	<div class="d-flex flex-wrap justify-content-center">
		<div class="p-2">
			  <input type="text" class="form-control" placeholder="Dato" id="txtData" name="txtData">
		</div>
		<br>
		<div class="p-2">
			  <button class="btn btn-outline-primary" type="button" onclick="addItemP();">Agregar dato Derecha (push)</button>
			  <button class="btn btn-outline-info" type="button" onclick="addItemUs();">Agregar dato elegido (unshift)</button>
		</div>
	</div>
	<div class="d-flex flex-wrap justify-content-start" id="arrays"></div>
	<div class="d-flex flex-wrap justify-content-end">
		<div class="p-2">
			<button class="btn btn-outline-warning" onclick="extractItemP();">Extraer dato derecha (pop)</button>
		</div>
		<div class="p-2">
			<button class="btn btn-outline-danger" onclick="extractItemS();">Extraer dato izquierda (shift)</button>
		</div>
		
	</div>

</section>

<script type="text/javascript">
	let dataArray = [];
	function addItemP(){
		let item = document.getElementById('txtData').value;
		dataArray.push(item);
		fillDiv();
	}
	function fillDiv(){
		let cad = '';
		document.getElementById("arrays").innerHTML = cad;
		for(var dato of dataArray){
			cad += '<div class="p-2 w-25 rounded border bg-white text-center">';
			cad += dato;
			cad += '</div>';	
		}
		document.getElementById("arrays").innerHTML = cad;
		document.getElementById('txtData').value = '';

	}

	function extractItemP(){
		if (dataArray.length > 0 ){
			alert("El elemento extraído es: "+  dataArray.pop());
			fillDiv();
		}else{
			alert("El arreglo está vacío!");
		}
	}

	function extractItemS(){
		if (dataArray.length > 0 ){
			alert("El elemento extraído es: "+  dataArray.shift());
			fillDiv();
		}else{
			alert("El arreglo está vacío!");
		}
	}

	function addItemUs(){
		let item = document.getElementById('txtData').value;
		dataArray.unshift(item);
		fillDiv();
	}


</script>
