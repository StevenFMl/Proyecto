<?php
/*TODO: Requerimientos */

require_once("../models/cliente.model.php");
error_reporting(0);

$empleado = new ClienteModel;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $cliente->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $cod_cliente = $_POST["cod_cliente"];
        $datos = array();
        $datos = $cliente->uno($cod_cliente);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $datos = array();
        $datos = $cliente->Insertar($codigo_empleado, $nombre, $apellido1, $apellido2, $extension, $email, $codigo_oficina, $codigo_jefe, $puesto);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar Maria Eugenia Serrano*/
    case 'actualizar':
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $datos = array();
        $datos = $cliente->Actualizar($codigo_empleado, $nombre, $apellido1, $apellido2, $extension, $email, $codigo_oficina, $codigo_jefe, $puesto);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $cod_cliente = $_POST["cod_cliente"];
        $datos = array();
        $datos = $cliente->Eliminar($cod_cliente);
        echo json_encode($datos);
        break;
}
