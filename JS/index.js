let usuario = document.getElementById('hola').onclick = imprimirDatosEnTabla;

fetch('PHP/consulta.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(data => {
    console.log(data);
    imprimirDatosEnTabla(data);
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

function imprimirDatosEnTabla(data) {
  let tbody = document.querySelector('#tabla-data tbody');

  try {
    let json = JSON.parse(data);
    json.forEach(dato => {
      let tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${dato.usuario}</td>
        <td>${dato.passw}</td>
        <td>${dato.email}</td>
      `;
      tbody.appendChild(tr);
    });
  } catch (e) {
    console.error("Error al convertir JSON: " + e.message);
  }
}
