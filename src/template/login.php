<?php
	$error = ( isset($_GET['error']) ) ? $_GET['error'] : false;
?>
<?php
	getPageHeader(
		array(
			"description" => "Encontre tudo o que precisar na sua região por aqui",
			"page-title" => "Eu Quero",
			"login" => true
		)
	);
?>
	<body>
		<div class="background"></div>
		<div class="login">
			<div class="content">
				<?php
					if($error == "wrong") { ?>
						<div class="alert alert-danger" role="alert"> O login ou senha informados estão incorretos</div> <?php
					}
				?>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="half-1">
						<div style="width: 75%;">
							<h2 class="pmd-display2">Entre como <strong>usuário</strong></h2>

							<form id="user-login" action="/login/" method="post">
								<div class="pmd-card-body">
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="username" class="control-label">Usuário</label>
										<input type="text" name="login" id="login" class="form-control"><span class="pmd-textfield-focused"></span>
									</div>
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="password" class="control-label">Senha</label>
										<input id="password" name="password" class="form-control" type="password"><span class="pmd-textfield-focused"></span>
									</div>
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" name="save" value="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
											<span>Lembrar senha</span>
										</label>
									</div>

									<button type="submit" class="btn pmd-btn-outline btn-block pmd-ripple-effect btn-primary">Entrar</button>
									<a class="btn pmd-btn-flat btn-block pmd-ripple-effect btn-default">Criar conta</a>
								</div>
							</form>
						</div>
					</div>
					<div class="half-2">
						<div>
							<h2 class="pmd-display2">Entre como <strong>comerciante</strong></h2>

							<form id="commerce-login" action="/login/" method="post">
								<div class="pmd-card-body">
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="cpnj" class="control-label">CPNJ / Email</label>
										<input type="text" name="cnpj" id="cpnj" class="form-control"><span class="pmd-textfield-focused"></span>
									</div>
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="password" class="control-label">Senha</label>
										<input id="password" name="password" class="form-control" type="password"><span class="pmd-textfield-focused"></span>
									</div>
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" name="save" value="false" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
											<span>Lembrar senha</span>
										</label>
									</div>

									<button type="submit" class="btn pmd-btn-raised btn-block pmd-ripple-effect btn-primary">Entrar</button>
									<a class="btn pmd-btn-flat btn-block pmd-ripple-effect btn-default">Solicitar conta</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php getFooter() ?>
