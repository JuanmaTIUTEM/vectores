$(document).ready(function () {
  const tareas = []; // Array para almacenar las tareas

  // Función para agregar una nueva tarea
  function agregarTarea(tarea) {
    tareas.push(tarea);
    actualizarListaTareas();
  }

  // Función para actualizar la lista de tareas en el HTML
  function actualizarListaTareas() {
    const listaTareas = document.getElementById('listaTareas');
    listaTareas.innerHTML = ''; // Limpiamos la lista

    tareas.forEach((tarea, indice) => {
      const listItem = document.createElement('li');
      listItem.className = 'list-group-item';
      listItem.innerHTML = `
        ${tarea}
        <button class="btn btn-danger btn-sm float-end" onclick="borrarTarea(${indice})">Borrar</button>
      `;
      listaTareas.appendChild(listItem);
    });
  }

  // Función para borrar una tarea por su índice
  function borrarTarea(indice) {
    tareas.splice(indice, 1);
    actualizarListaTareas();
  }

  // Manejo del formulario para agregar tareas
  $('#tareaForm').submit(function (event) {
    event.preventDefault();
    const nuevaTarea = $('#tarea').val();
    agregarTarea(nuevaTarea);
    $('#tarea').val('');
  });
});