<?php
  header_Admin($data);
  getModal('modalClientes', $data);
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1>
        <i class="fa fa-user-tag"></i> <?= $data['page_title']; ?>
        <?php if ($_SESSION['permisosMod']['w']) { ?>
        <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle mr-1"></i> Nuevo</button>
        <?php } ?>
      </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url();?>/clientes"><?= $data['page_name']; ?></a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-sm table-hover table-bordered table-fix" id="tableClientes">
              <thead>
                <tr class="bg-primary text-white">
                  <th>ID</th>
                  <th>Identificacion</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Teléfono</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php footer_Admin($data); ?>