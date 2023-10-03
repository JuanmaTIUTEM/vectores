<?php 
  include 'users.php';

  $allUsers = getAllUsers($users);
?>
<div class="container mt-4">
        <h3 class="text-center">Lista de Tareas <hr></h3>
        <div class="d-flex flex-column justify-content-center ">
          <div class="mb-3 mt-3  d-flex justify-content-center">
            <div class="p-2 flex-fill"> 
              <label for="nuevaTarea" class="form-label">Nueva tarea:</label>
              <input type="text" class="form-control" id="nuevaTarea" placeholder="Nombre de la tarea" name="nuevaTarea">
            </div>
            <div class="p-2 flex-fill"> 
              <label for="tiempoEst" class="form-label">Tiempo estimado:</label>
              <input type="text" class="form-control" id="tiempoEst" placeholder="Hrs/Días/Meses/Años" name="tiempoEst">
            </div>
              
          </div>
          <div class="mb-3  d-flex justify-content-center">
            
            <div class="p-2 flex-fill">
              <label for="desc" class="form-label">Descripción:</label>
              <textarea type="text" class="form-control" id="desc" placeholder="Descripción" name="desc"></textarea>
            </div>

            <div class="p-2 ">
              <label for="desc" class="form-label">Asignar a:</label>
              <select class="form-control" id="selUser">
                <option value="0">Seleccione Opcion</option>
                <?php foreach ($allUsers as $user): ?>
                  <option value="<?php echo $user['user_id'] ?>"><?php echo $user['first_name'] . ' '. $user['last_name']; ?></option>
                <?php endforeach ?>
               
              </select>
            </div>
            
          </div>
          <div class="d-flex justify-content-center">
            <div class="p-2">
              <button class="btn btn-primary" onclick="agregarTarea()">Agregar</button>
            </div>
          </div>
        </div>
        

        <hr>

        <ul id="listaTareas" class="list-group">
            <!-- Aquí se mostrarán las tareas -->
        </ul>
    </div>
<script type="text/javascript">
    const listaTareas = [];
    const inputTarea = document.getElementById('nuevaTarea');
    const tiempoEst = document.getElementById('tiempoEst');
    const desc = document.getElementById('desc');
    const user = document.getElementById('selUser');
    const ulTareas = document.getElementById('listaTareas');

    function agregarTarea() {
      const obj = {};
      obj.tarea = inputTarea.value.trim();
      obj.desc = desc.value.trim();
      obj.test = tiempoEst.value.trim();
      obj.userid = user.value.trim();
      if (tarea !== '') {
        listaTareas.push(obj);
        actualizarLista();
        inputTarea.value = '';
        desc.value = '';
        tiempoEst.value = '';
        user.value = 0;
      }
    }

    function eliminarTarea(index) {
      listaTareas.splice(index, 1);
      actualizarLista();
    }

    function actualizarLista() {
      ulTareas.innerHTML = '';
      listaTareas.forEach((tarea, index) => {
        const li = document.createElement('li');
        li.className = 'list-group-item';
        
        const botonEliminar = document.createElement('button');
        botonEliminar.className = 'btn btn-danger btn-sm float-end';
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.addEventListener('click', () => {
          eliminarTarea(index);
        });
        let cad = "Tarea: " + tarea.tarea + "  || Tiempo Estimado: " + tarea.test +"  || Descripción: " + tarea.desc + "|| Asignado a: " + tarea.userid;
        li.textContent = cad;
        li.appendChild(botonEliminar);
        ulTareas.appendChild(li);
      });
    }

</script>