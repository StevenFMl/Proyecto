function init() {
  $('#clientes_form').on('submit', (e) => {
      guardayeditarClientes(e);
  });
}

$().ready(() => {
  cargaTablaClientes();
});

var cargaTablaClientes = () => {
  var html = "";
  $.post(
      "../../controllers/clientes.controller.php?op=todos",
      (listaclientes) => {
          listaclientes = JSON.parse(listaclientes);
          $.each(listaclientes, (index, clientes) => {
              html +=
                  `<tr>` +
                  `<td>${index + 1}</td>` +
                  `<td>${clientes.cedula}</td>` +
                  `<td>${clientes.nombre}</td>` +
                  `<td>${clientes.apellido}</td>` +
                  `<td>${clientes.direccion}</td>` +
                  `<td>${clientes.telefono}</td>` +
                  `<td>` +
                  `<button class='btn btn-success'>Editar</button>` +
                  `<button class='btn btn-danger'>Eliminar</button>` +
                  `</td>` +
                  `</tr>`;
          });
          $("#TablaClientes").html(html);
      }
  );
};

var guardayeditarClientes = (e) => {
  e.preventDefault();
  var url = "";
  var form_Data = new FormData($("#clientes_form")[0]);
  var cod_cliente = document.getElementById("cod_cliente").value;
  if (cod_cliente === undefined || cod_cliente === "") {
      url = "../../controllers/clientes.controller.php?op=insertar";
  } else {
      url = "../../controllers/clientes.controller.php?op=actualizar";
  }
  for (var pair of form_Data.entries()) {
      console.log(pair[0] + ', ' + pair[1]);
  }

  $.ajax({
      url: url,
      type: "POST",
      data: form_Data,
      processData: false,
      contentType: false,
      cache: false,
      success: (respuesta) => {
          console.log(respuesta);
          respuesta = JSON.parse(respuesta);
          if (respuesta == "ok") {
              alert("Se guardó con éxito");
              limpiar();
              cargaTablaClientes();
          } else {
              alert("Ocurrió un error al guardar. " + respuesta);
          }
      },
  });
};

var limpiar = () => {
  document.getElementById('cod_cliente').value = '';
  document.getElementById('cedula').value = '';
  $('#nombre').val('');
  $('#apellido').val('');
  $('#direccion').val('');
  $('#telefono').val('');
  $('#modalClientes').modal('hide');
};

init();