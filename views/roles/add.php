<?php
require_once('../../app/routes.php');
  include_once('../../views/templates/header.php');
  include_once('../../views/templates/sidebar.php');
  include_once('../../app/models/roles.php');

  if (isset($_POST['submit']) && $_POST['submit'] == 1) {
    $name = $_POST['name'];

    if (!$name) {
      $msg = 'Por favor, ingrese un nombre';
    }
  }

  if (isset($_POST['delete']) && $_POST['delete'] == 1) {
    $idrol = $_POST['idrol'];

    if (!$idrol) {
      $msg2 = 'Por favor, ingrese id de rol';
    }
  }
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

<div style="display: flex; flex-direction: row; gap: 50px; flex-grow: 1; text-align: center; margin-left: 300px;">

<div class="card text-dark bg-light mb-3" style="max-width: 22rem; margin-top: 50px;">
  <div class="card-header">Nuevo Rol</div>
  <div class="card-body text-secondary">
          <?php if(isset($msg)): ?>
              <p class="alert alert-danger"><?= $msg ?></p>

            <?php endif; ?>
            <form action="" method="post">
          <div class="mb-3">
            <label for="roles" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="roles" placeholder="Nombre del rol">
          </div>
          <div class="mb-3">
            <input type="hidden" name="submit" value="1">
            <input class="btn btn-outline-primary" type="submit" value="Crear Nuevo Rol">
          </div>
        </form>
  </div>
</div>

<div class="card text-dark bg-light mb-3" style="max-width: 22rem; margin-top: 50px;">
  <div class="card-header">Eliminar Rol Existente</div>
  <div class="card-body text-secondary">
             <?php if(isset($msg2)): ?>
              <p class="alert alert-danger"><?= $msg2 ?></p>

            <?php endif; ?>
            <form action="" method="post">
          <div class="mb-3">
            <label for="roles" class="form-label">Rol</label>
            <input type="text" name="idrol" class="form-control" id="roles" placeholder="Id del rol">
          </div>
          <div class="mb-3">
            <input type="hidden" name="delete" value="1">
            <input class="btn btn-outline-danger" type="submit" value="Eliminar Rol">
          </div>
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