

		

		<div class="container">

			<div class="row">
				<div class="box">

					<div class="span12">
						<div class="" id="loginModal">

							<div class="modal-body">
								<div class="well">
									<ul class="nav nav-tabs">
										<li class="active col-xs-6">
											<a href="#login" data-toggle="tab">Login</a>
										</li>
										<li class="col-xs-6">
											<a href="#create" data-toggle="tab">Registro</a>
										</li>
									</ul>

									<div id="myTabContent" class="tab-content">
										<div class="tab-pane active in" id="login">
											<form class="form-horizontal" action='' method="POST">
												<fieldset>

													<div class="control-group col-xs-12">
														<!-- Username -->
														<label class="control-label"  for="email">Email</label>
														<div class="controls">
															<input type="text" id="email_login" name="email" placeholder="" class="form-control">
														</div>
													</div>

													<div class="control-group col-xs-12">
														<!-- Password-->
														<label class="control-label" for="password">Password</label>
														<div class="controls">
															<input type="password" id="password_login" name="password" placeholder="" class="form-control">
														</div>
													</div>

													<div class="control-group col-xs-12">
														<!-- Button -->
														<div class="controls">
															<button class="btn btn-success" id="btn_login">
																Login
															</button>
														</div>
													</div>

												</fieldset>
											</form>
										</div>
										<div class="tab-pane fade" id="create">
											<form id="tab">
												<fieldset>

													<div class="form-group">
														<label for="nombre">Nombre</label>
														<input type="text" class="form-control" id="nombre" placeholder="nombre">
													</div>
													<div class="form-group">
														<label for="apellidos">Apellidos</label>
														<input type="text" class="form-control" id="apellidos" placeholder="apellidos">
													</div>
													<div class="form-group">
														<label for="pass">Password</label>
														<input type="password" class="form-control" id="pass" placeholder="Password">
													</div>
													<div class="form-group">
														<label for="pass2">Repetir password</label>
														<input type="password" class="form-control" id="pass2" placeholder="Repetir password">
													</div>
													<div class="form-group">
														<label for="exampleInputEmail2">Email</label>
														<input type="email" class="form-control" id="email" placeholder="email@example.com">
													</div>
													<div class="form-group">
														<label for="telefono">Teléfono</label>
														<input type="text" class="form-control" id="telefono" placeholder="943000000">
													</div>

													<div>
														<button class="btn btn-primary" id="btn_registrar">
															Create Account
														</button>
													</div>

												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container -->


