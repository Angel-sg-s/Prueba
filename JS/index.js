let boton = document.getElementById('hola');
boton.addEventListener('click', function() {
  fetch('PHP/consulta.php')
    .then(response => response.json())
    .then(data => {
      console.log(data);
      imprimirDatosEnTabla(data);
    })
    .catch(error => {
      console.error(error);
    });
});

function imprimirDatosEnTabla(data) {
  let tbody = document.querySelector('#tabla-data tbody');
  tbody.innerHTML = '';

  data.forEach(dato => {
    let tr = document.createElement('tr');
    tr.innerHTML = `
      
      <td>${dato.Usuario}</td>
      <td>${dato.Passw}</td>
      <td>${dato.email}</td>
      <td><button class="${dato.id}" data-id="${dato.id}">Eliminar</button></td>
      `;
    tbody.appendChild(tr);
  });
}

function eliminarDato() {
  let id = this.dataset.id; // Obtener el id del dato a eliminar
  let url = 'PHP/eliminar.php'; // URL del archivo PHP encargado de eliminar los datos

  // Crear la petición fetch
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: `id=${id}` // Pasar el id como parámetro en el cuerpo de la petición
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // Si la eliminación fue exitosa, volver a cargar los datos de la tabla
    if (data.eliminado === true) {
      fetch('PHP/consulta.php')
        .then(response => response.json())
        .then(data => {
          console.log(data);
          imprimirDatosEnTabla(data);
        })
        .catch(error => {
          console.error(error);
        });
    }
  })
  .catch(error => {
    console.error(error);
  });
}
