<?php
//TODO: Requerimientos 
require_once('../config/config.php');
class ClienteModel
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from clientes";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($cod_cliente)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM clientes WHERE cod_cliente = $cod_cliente";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($cedula,$nombre, $apellido, $direccion, $telefono)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into `clientes` ( `cedula`, `nombre`, `apellido`, `direccion`, `telefono`) values ('$cedula', '$nombre', '$apellido', '$direccion', '$telefono')";
        
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($cedula,$nombre, $apellido, $direccion, $telefono)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "update clientes set cedula='$cedula',nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono'";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($cod_cliente)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from clientes where cod_cliente = $cod_cliente";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}