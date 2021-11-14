<?php
	header_Admin($data);
  	getModal('modalPerfil', $data);
?>
<main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="<?= media(); ?>/img/icon/avatar.png">
              <h4><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']; ?></h4>
              <p><?= $_SESSION['userData']['nombrerol']; ?></p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Datos personales</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Datos fiscales</a>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media"><!-- <a href="#"><img src="<?= media(); ?>/img/icon/avatar.png"></a> -->
                  <div class="content">
                    <h5>Datos Personales <button class="btn btn-sm btn-info" type="button" onclick="openModalPerfil();"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button></h5>
                    <p class="text-muted"><small>2 January at 9:30</small></p>
                  </div>

                  <table class="table table-responsive">
                  	<tbody>
                  		<tr>
                  			<td style="width: 150px">Identificacion:</td>
                  			<td><?= $_SESSION['userData']['identificacion']; ?></td>
                  		</tr>
                  		<tr>
                  			<td>Nombres:</td>
                  			<td><?= $_SESSION['userData']['nombres']; ?></td>
                  		</tr>
                  		<tr>
                  			<td>Apellidos:</td>
                  			<td><?= $_SESSION['userData']['apellidos']; ?></td>
                  		</tr>
                  		<tr>
                  			<td>Teléfono:</td>
                  			<td><?= $_SESSION['userData']['telefono']; ?></td>
                  		</tr>
                  		<tr>
                  			<td>Email:</td>
                  			<td><?= $_SESSION['userData']['email_user']; ?></td>
                  		</tr>
                  	</tbody>
                  </table>

                </div>
              </div>
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img src="<?= media(); ?>/img/icon/avatar.png"></a>
                  <div class="content">
                    <h5><a href="#">John Doe</a></h5>
                    <p class="text-muted"><small>2 January at 9:30</small></p>
                  </div>
                </div>
                <div class="post-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                  <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                  <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Datos Fiscales</h4>
                <form id="formDataFiscal" name="formDataFiscal">
                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label>Identificación Tributaria</label>
                      <input class="form-control" type="text" id="txtNit" name="txtNit" value="<?= $_SESSION['userData']['nit']; ?>" required>
                    </div>
                    <div class="col-md-6">
                      <label>Nombre Fiscal</label>
                      <input class="form-control" type="text" id="txtNombreFiscal" name="txtNombreFiscal" value="<?= $_SESSION['userData']['nombrefiscal']; ?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-4">
                      <label>Dirección Fiscal</label>
                      <input class="form-control" type="text" id="txtDirFiscal" name="txtDirFiscal" value="<?= $_SESSION['userData']['direccionfiscal']; ?>" required>
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php footer_Admin($data); ?>