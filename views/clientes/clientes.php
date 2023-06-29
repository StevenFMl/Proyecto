<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["cod_cliente"])) {
    $_SESSION["ruta"] = "clientes";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once('../html/head.php')  ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php  require_once('../html/menu.php') ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php include_once('../html/header.php')  ?>
                <!-- End of Topbar -->
               
                <main id="main" class="main">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"] ?></h1>
                        </div>
    <div class="pagetitle">
    <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"] ?></h6>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item">Tablas</li>
          <li class="breadcrumb-item active">Clientes</li>
        </ol>
        <button onclick="cargaSelectRoles()" class="btn btn-primary float-right">Agregar Cliente</button>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                  </tr>
                </thead>
                <tbody id= 'Tabla clientes'></tbody>
        

              <div class="modal fade" id="modalClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titulModalClientes">Ingresar Clientes</h5>
                                <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                  <!-- Ventanas Modales -->
                            </div>
                            <form id="clientes_form">
                                <div class="modal-body">
                                    <input type="hidden" name="cod_cliente" id="cod_cliente">
                                    <div class="form-group">
                                        <label for="cedula" class="control-label">cedula</label>
                                        <input type="text" name="cedula" id="cedula" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre" class="control-label">nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido" class="control-label">apellido</label>
                                        <input type="email" name="apellido" id="apellido" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion" class="control-label">direccion</label>
                                        <input type="text" name="direccion" id="direccion" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono" class="control-label">telefono</label>
                                        <select name="telefono" id="telefono" class="form-control">
                                           
                                        </select>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                
              
            <!-- Footer -->
            
        
  <!--scripts-->
  <?php include_once('../html/scripts.php')  ?>
        
        <script src="cliente.js"></script>
    </body>

    </html>


<?php
} else {
    header('Location:../../index.php');
}
?>