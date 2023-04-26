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

//Mostrar datos

function imprimirDatosEnTabla(data) {
  let tbody = document.querySelector('#tabla-data tbody');
  tbody.innerHTML = '';

  data.forEach(dato => {
    let tr = document.createElement('tr');
    tr.innerHTML = `
      
      <td>${dato.Usuario}</td>
      <td>${dato.Passw}</td>
      <td>${dato.email}</td>
      <td><button class="elimiar" onclick='eliminarDato(${dato.id})'">Eliminar</button></td>
      `;
    tbody.appendChild(tr);
  });
}

//Eliminar datos
function eliminarDato(id) {
  // <?php require 'PHP/eliminar.php'?> 
  console.log(id)// URL del archivo PHP encargado de eliminar los datos
}