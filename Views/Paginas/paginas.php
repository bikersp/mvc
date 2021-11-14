<?php header_Admin($data); ?>
  <main class="app-content">
      <div class="app-title">
        <div>
          <h1>
            <i class="fa fa-box"></i> <?= $data['page_title']; ?>
            <?php if ($_SESSION['permisosMod']['w']) { ?>
            <a href="<?= base_url()?>/paginas/crear" class="btn btn-primary"><i class="fas fa-plus-circle mr-1"></i> Crear página</a>
            <?php } ?>
          </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/paginas"><?= $data['page_name'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered table-fix" id="tablePaginas">
                      <thead>
                        <tr class="bg-primary text-white">
                          <th>ID</th>
                          <th>Título</th>
                          <th>Fecha</th>
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