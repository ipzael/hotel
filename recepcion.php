<?php
$pagelvl = "mix";
include("assets/controller/dbdriver.php");
$sql = "SELECT habitacion, room_statusID, descripcion FROM habitaciones";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Gestion Hotelera</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="fonts/SourceSansPro-Fonts.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/rodrigo-custom.css">
  <script src="plugins/jquery/jquery.min.js"></script>
  <script>
    var Rooms = []
  </script>
  <?php include("assets/model/loadrooms.php"); ?>
  <script src="assets/js/roomcards.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="img/minovate-logo-color.png" style="opacity: .8">
        <span class="brand-text font-weight-light">Gestión Hoteles</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional)
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->

        <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

        <!-- Sidebar Menu -->
        <?php include("assets/controller/session.php"); ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Menú de Recepción</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="recepcion.php">Inicio</a></li>
                <li class="breadcrumb-item active">Recepción</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="RoomCards"> </div>
            <div class="RoomsModal" title="Formulario de Habitaciones">
              <table id="RoomInfo">
                <tbody>
                  <tr>
                    <td><label>Numero</label></td>
                    <td id="RoomNumber"></td>
                  </tr>
                  <tr>
                    <td><label>Tipo</label></td>
                    <td id="RoomType"></td>
                  </tr>
                  <tr>
                    <td><label>Detalles</label></td>
                    <td id="RoomServices"></td>
                  </tr>
                  <tr>
                    <td><label>Estado</label></td>
                    <td id="RoomStatus"></td>
                  </tr>
                </tbody>
              </table>
              <table id="RoomClient">
                <tbody>
                  <tr>
                    <h5><label>Datos del Cliente</label></h5>
                  </tr>

                  <tr>
                    <td><i class="fa fa-user"></i> <label for="ClienteNombre">Nombre Completo:</label>
                      <p><input type="text" name="ClienteNombre" id="ClienteNombre" placeholder="Maria Guadalupe Hernandez Garcia"></p>
                    </td>
                  </tr>

                  <tr>

                  </tr>
                  <tr>
                    <td><i class="fa fa-globe"></i> <label for="ClienteNacionalidad">Nacionalidad:</label>
                      <p>
                        <input type="text" name="ClienteNacionalidad" id="ClienteNacionalidad" placeholder="Mexicana">
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <i class="fa fa-id-card"></i> <label>Documento de Identidad:</label></br>
                        <div class="RadioContainer">
                          <input type="radio" name="kycdoc" value="ID" id="ID" checked>
                          <label for="ID">Identificacion</label>
                        </div>
                        <div class="RadioContainer">
                          <input type="radio" name="kycdoc" value="Pasaporte" id="Pasaporte">
                          <label for="Pasaporte">Pasaporte</label>
                        </div>
                      </div>

                    </td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="btn btn-primary">Aceptar</a>
              <a href="#" class="btn btn-primary btn-cancel">Cancelar</a>
            </div>

          </div>
          <br>
          <!--<div class="row">-->


        </div>
      </div>
      <!-- /.content original -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <?php include("template/footer.php"); ?>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!--Scripts Dinamicos-->
  <link href="css/roomcards.css" rel="stylesheet" property='stylesheet'>
  <script src="assets/js/transformform.js"></script>

  <!--End Scripts Dinamicos-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</body>

</html>