<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ElectroFix / Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./public/img/favicon.png" rel="icon">
  <link href="./public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./public/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./public/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./public/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./public/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="./public/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ElectroFix</span>
                </a>
              </div><!-- Fin Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ingresa con tu cuenta</h5>
                    <p class="text-center small">Pon tu usuario & contraseña para entrar</p>
                  </div>

                  <form class="user"  action="controllers/usuario.controller.php?op=login" method="post">
                  <?php
                                        if (isset($_GET['op'])) {
                                            switch ($_GET['op']) {  //TODO: Clausula de desicion para obtener variable tipo GET
                                                case '1':
                                        ?>
                                                    <div class="form-group">
                                                        <div class="alert alert-danger">
                                                            El usuario o la contrasenia son incorrectos
                                                        </div>
                                                    </div>
                                                <?php
                                                    break;
                                                case '2':
                                                ?>
                                                    <div class="form-group">
                                                        <div class="alert alert-danger">
                                                            Por favor, llene las cajas de texto
                                                        </div>
                                                    </div>
                                        <?php
                                            }
                                        }
                                        ?>
                    <div class="form-group">
                      <label for="yourUsername" class="form-label">Correo de Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="ri-account-pin-circle-fill"></i></span>
                        <input type="text" class="form-control form-control-user" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        <div class="invalid-feedback">Porfavor ingrese su correo.</div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" required
                      id="contrasenia" name="contrasenia"  placeholder="Contraseña">
                      <div class="invalid-feedback">Porfavor ingrese su contraseña!</div>
                      </div>

<div class="col-12">
  <div class="form-check">
    <label class="form-check-label" for="rememberMe"></label>
  </div>
</div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>

                    <div class="col-12">
                    
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Diseñado por <a href="https://bootstrapmade.com/">ElectroFix</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./public/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="./public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./public/vendor/chart.js/chart.umd.js"></script>
  <script src="./public/vendor/echarts/echarts.min.js"></script>
  <script src="./public/vendor/quill/quill.min.js"></script>
  <script src="./public/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="./public/vendor/tinymce/tinymce.min.js"></script>
  <script src="./public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./public/js/main.js"></script>

</body>

</html>