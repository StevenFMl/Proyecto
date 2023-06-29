<?php

//TODO: Archivos requeridos
require_once('../config/config.php');

class UsuariosModel
{
    public function login($correo, $contrasenia)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT usuario.*, roles.* FROM usuario INNER JOIN Usuarios_Roles on usuario.idUsaurio = Usuarios_Roles.idUsuario INNER JOIN roles on Usuarios_Roles.idRoles = roles.idRoles WHERE correo = '$correo' and contrasenia='$contrasenia'";
        print $cadena;
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    public function todos(){  //TODO: Procedimeinto para obtener todos los registros de la BDD
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM usuario INNER JOIN Usuarios_Roles on usuario.idUsaurio = Usuarios_Roles.idUsuario INNER JOIN roles on Usuarios_Roles.idRoles = roles.idRoles ORDER BY Apellidos";
        $datos = mysqli_query($con,$cadena);
        return $datos;
    }
    public function Insertar($Nombres, $Apellidos, $correo, $contrasenia, $idRoles){
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `usuario`(`Nombres`, `Apellidos`, `contrasenia`, `correo`) VALUES ('$Nombres','$Apellidos','$contrasenia','$correo')";
        $datos = mysqli_query($con,$cadena);
    }
}