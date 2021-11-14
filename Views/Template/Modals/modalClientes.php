    <!-- Modal -->
    <div class="modal fade" id="modalFormCliente" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header headerRegister">
            <h5 class="modal-title" id="titleModal">Nuevo Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formCliente" name="formCliente" class="form-horizontal">
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
              <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="control-label">Identificación <span class="required">*</span></label>
                  <input class="form-control" id="txtIdentificacion" name="txtIdentificacion" type="text" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Nombres <span class="required">*</span></label>
                  <input class="form-control valid validText" id="txtNombre" name="txtNombre" type="text" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Apellidos <span class="required">*</span></label>
                  <input class="form-control valid validText" id="txtApellido" name="txtApellido" type="text" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="control-label">Teléfono <span class="required">*</span></label>
                  <input class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" type="text" required onkeypress="return controlTag(event);">
                </div>
                <div class="form-group col-sm-4">
                  <label class="control-label">Email <span class="required">*</span></label>
                  <input class="form-control valid validEmail" id="txtEmail" name="txtEmail" type="text" required>
                </div>
                <div class="form-group col-sm-4">
                  <label class="control-label">Password</label>
                  <input class="form-control" id="txtPassword" name="txtPassword" type="password">
                </div>
              </div>
              <hr>              
              <p class="text-primary">Datos Fiscales</p>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Identificación Tributaria <span class="required">*</span></label>
                  <input class="form-control" type="text" id="txtNit" name="txtNit" required="">
                </div>
                <div class="form-group col-md-6">
                  <label>Nombre Fiscal <span class="required">*</span></label>
                  <input class="form-control valid validText" type="text" id="txtNombreFiscal" name="txtNombreFiscal" required="">
                </div>
                <div class="form-group col-md-12 mb-4">
                  <label>Dirección Fiscal <span class="required">*</span></label>
                  <input class="form-control valid" type="text" id="txtDirFiscal" name="txtDirFiscal" required="">
                </div>
              </div>
              <div class="form-row">

              </div>

              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;

                 <button  class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ver Cliente-->
    <div class="modal fade" id="modalViewCliente" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-primary">
            <h5 class="modal-title" id="titleModal">Datos del Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Identificación:</td>
                  <td id="celIdentificacion"></td>
                </tr>
                <tr>
                  <td>Nombres:</td>
                  <td id="celNombre"></td>
                </tr>
                <tr>
                  <td>Apellidos:</td>
                  <td id="celApellido"></td>
                </tr>
                <tr>
                  <td>Teléfono:</td>
                  <td id="celTelefono"></td>
                </tr>
                <tr>
                  <td>Email (Usuario):</td>
                  <td id="celEmail"></td>
                </tr>
                <tr>
                  <td>Nit:</td>
                  <td id="celNit"></td>
                </tr>
                <tr>
                  <td>Nombre Fiscal:</td>
                  <td id="celNomFiscal"></td>
                </tr>
                <tr>
                  <td>Dirección Fiscal:</td>
                  <td id="celDirFiscal"></td>
                </tr>
                <tr>
                  <td>Fecha registro:</td>
                  <td id="celFechaRegistro"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
