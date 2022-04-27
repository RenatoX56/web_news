<?php
require_once('../../app/routes.php');
  include_once('../../views/templates/header.php');
  include_once('../../views/templates/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              Gestionar Roles
              <a class="btn btn-outline-primary"
              href="<?= getRoute('roles') ?>">Ver Roles</a>

            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo ADMIN; ?>">Admin</a></li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
<div class="container-fluid">

<div style="display: flex; flex-direction: row; gap: 50px; flex-grow: 1; text-align: center;">

<div class="card text-dark bg-light mb-3" style="max-width: 22rem; margin-top: 50px;">
  <div class="card-header">Nuevo Rol</div>
  <div class="card-body text-secondary">
        <form>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Nombre nuevo Rol</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
           <center style="margin-top: 10px; margin-bottom: 10px;"> <button type="submit" class="btn btn-primary">Crear Rol</button></center>
        </form>
  </div>
</div>

<div class="card text-dark bg-light mb-3" style="max-width: 22rem; margin-top: 50px;">
  <div class="card-header">Eliminar Rol Existente</div>
  <div class="card-body text-secondary">
        <form>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Id Rol</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="mb-3 input-group">
                <input ID="txtPassword" type="Password" Class="form-control">
                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
            </div>
           <center style="margin-top: 10px; margin-bottom: 10px;"> <button type="submit" class="btn btn-danger">Eliminar</button></center>
        </form>
  </div>
</div>

</div>


</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
  include_once('../../views/templates/footer.php');
?>