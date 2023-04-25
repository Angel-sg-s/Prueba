let boton = document.getElementById('hola');
boton.addEventListener('click', function() {
  fetch('PHP/consulta.php')
    .then(response => response.json())
    .then(data => {
      console.log(data);
      imprimirDatosEnTabla(data);
    })
    .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
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
    `;
    tbody.appendChild(tr);
  });
}
