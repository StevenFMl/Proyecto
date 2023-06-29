$().ready(
    ()=>{
        llenarTabla();
    }
);

//           ../../controllers/alumnos.controller.php?op=todos

var llenarTabla = ()=>{
    var html='';
    $.get('../../controllers/alumnos.controller.php?op=todos',{}, 
    (listaalumnos)=>{
        listaalumnos = JSON.parse(listaalumnos);
        $.each(listaalumnos,(index, alumno)=>{
            html +=`<tr>`+
            `<td>${index + 1} </td>` +
            `<td>${alumno.Nombres}</td>` + 
            `<td>${alumno.Apellidos}</td>`+
            `<td>${alumno.Direccion}</td>` +
            `<td><button class='btn btn-success'>Editar</button>`+
            `<button class='btn btn-danger'>Eliminar</button></td>` + 
            `</tr>`
        });
        $('#Alumnos').html(html);
    });
}