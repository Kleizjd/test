       <?php headerAdmin($data);
		getModal('modalPrueba', $data); 
		?>
       <!-- page content -->
       <main class="app-content">
       	<div class="row">
       		<div class="col-md-12 col-sm-12 ">
       			<div class="x_panel">
       				<div class="x_title">
       					<h2>Reporte de Usuario <small>Reporte de Actividad</small></h2>
       					<ul class="nav navbar-right panel_toolbox">
       						<li>
       						</li>
       					</ul>
       					<div class="clearfix"></div>
       				</div>
       				<div class="x_content">
       			
       					<div class="col-md-12 col-sm-12 ">
       						<div class="profile_title">
       							<div class="col-md-6">
       								<!-- <h2>User Activity Report</h2>  -->
       							</div>
       						</div>
       						<!-- start of user-activity-graph -->
       						<!-- Column -->
       						<div class="col-lg-12 col-xlg-12 col-md-12">
       							<div class="card">
       								<!-- Nav tabs -->
       								<ul class="nav nav-tabs profile-tab" role="tablist">
       									<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Configuraciones</a> </li>

       									<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fiscales" role="tab">Datos Fiscales</a> </li>
       									<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>

       								</ul>
       								<!-- Tab panes -->
       								<div class="tab-content">
       									<div class="tab-pane active" id="settings" role="tabpanel">
       										<div class="card-body">
       											<form id="formPerfil" name="formPerfil" class="form-horizontal">
       												<input type="hidden" id="foto_actual" name="foto_actual" value="">
       												<input type="hidden" id="foto_remove" name="foto_remove" value="0">
       												<p class="text-primary">Los campos con asterisco (<span style="color:red">*</span>) son obligatorios.</p>
       												<div class="form-row">
       													<div class="form-group col-md-6">
       														<label for="txtIdentificacion">Identificación <span style="color:red">*</span></label>
       														<input type="text" class="form-control valid validNumber" id="txtIdentificacion" name="txtIdentificacion" value="" required="">
       													</div>
       												</div>
       												<div class="form-row">
       													<div class="form-group col-md-6">
       														<label for="txtNombre">Nombres <span style="color:red">*</span></label>
       														<input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" value="" required="">
       													</div>
       													<div class="form-group col-md-6">
       														<label for="txtApellido">Apellidos <span style="color:red">*</span></label>
       														<input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" value="" required="">
       													</div>
       												</div>
       												<div class="form-row">
       													<div class="form-group col-md-6">
       														<label for="txtTelefono">Teléfono <span style="color:red">*</span></label>
       														<input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" value="" required="" onkeypress="return controlTag(event);">
       													</div>
       													<div class="form-group col-md-6">
       														<label for="txtEmail">Email</label>
       														<input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" value="" required="" readonly disabled>
       													</div>
       												</div>
       												<div class="form-row">
       													<div class="form-group col-md-6">
       														<label for="txtPassword">Password</label>
       														<input type="password" class="form-control" id="txtPassword" name="txtPassword">
       													</div>
       													<div class="form-group col-md-6">
       														<label for="txtPasswordConfirm">Confirmar Password</label>
       														<input type="password" class="form-control" id="txtPasswordConfirm" name="txtPasswordConfirm">
       													</div>
       												</div>
       												<div class="tile-footer">
       													<button id="btnActionForm" class="btn btn-info" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Actualizar</span></button>
       												</div>
       											</form>
       										</div>
       									</div>
       									<!--second tab-->
       									<div class="tab-pane" id="profile" role="tabpanel">
       										<div class="card-body">
       											<div class="row">
       												<div class="col-md-3 col-xs-6 b-r"> <strong>Nombre</strong>
       													<br>
       													<p class="text-muted"></p>
       												</div>
       												<div class="col-md-3 col-xs-6 b-r"> <strong>Apellido</strong>
       													<br>
       													<p class="text-muted"></p>
       												</div>
       												<div class="col-md-3 col-xs-6 b-r"> <strong>Cedula de Identificación</strong>
       													<br>
       													<p class="text-muted"></p>
       												</div>
       												<div class="col-md-3 col-xs-6 b-r"> <strong>Celular</strong>
       													<br>
       													<p class="text-muted"></p>
       												</div>
       												<div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
       													<br>
       													<p class="text-muted"></p>
       												</div>
       											</div>
       											<hr>
       											<p class="m-t-30"></p>

       										</div>
       									</div>
       									<!--third tab-->
       									<div class="tab-pane " id="fiscales" role="tabpanel">
       										<div class="card-body">
       											<form id="formDataFiscal" name="formDataFiscal">
       												<div class="row mb-4">
       													<div class="col-md-6">
       														<label>Identificación Tributaria</label>
       														<input class="form-control" type="text" id="txtNit" name="txtNit" value="">
       													</div>
       													<div class="col-md-6">
       														<label>Nombre fiscal</label>
       														<input class="form-control" type="text" id="txtNombreFiscal" name="txtNombreFiscal" value="">
       													</div>
       												</div>
       												<div class="row">
       													<div class="col-md-12 mb-4">
       														<label>Dirección fiscal</label>
       														<input class="form-control" type="text" id="txtDirFiscal" name="txtDirFiscal" value="">
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
       						<!-- Column -->
       						<!-- end of user-activity-graph -->
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       </main>

       <!-- /page content -->

       <!-- footer content -->
       <?php footerAdmin($data); ?>