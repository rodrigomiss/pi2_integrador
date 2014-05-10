<!DOCTYPE html>
<html lang="pt-br">
	<?php require_once "includes/head.php";?>	
	<body>
		<div class="container">
			<?php require_once "includes/header.php";?>

			<?php require_once "includes/main-menu.php";?>

			<div class="row">
				<div id="content" class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
				<div class="row">
						<div id="account-menu" class="navbar navbar-default col-xs-4 col-xs-offset-4" role="navigation">
	    				<div class="container">
	<!--       				<div class="navbar-header">
		              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		            </div> -->
		              <ul class="nav navbar-nav">
		                <li><a id="btn-account-login" href="#">LOGIN</a></li>
		                <li><a id="btn-account-cadastro" href="#">CADASTRO</a></li>
		              </ul>
		            </div>
		        </div>
					</div>
				</div>
				<div id="account-login" class="row" style="display:none">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-sm-offset-1">
						<div class="input-group">
							<span class="input-group-addon glyphicon glyphicon-envelope"></span>
						  <input type="text" class="form-control" placeholder="Endereço de e-mail">
						</div>
						<div class="input-group">
						  <span class="input-group-addon glyphicon glyphicon-asterisk"></span>
						  <input type="text" class="form-control" placeholder="Senha">
						</div>
						<button type="submit" class="btn btn-default btn-lg">Login</button>
					</div>
				</div>
				<div id="account-cadastro" class="row" style="display:none">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-sm-offset-1">
						<form>
							<div class="input-group">
							  <span class="input-group-addon glyphicon glyphicon-user"></span>
							  <input type="text" class="form-control" placeholder="Nome">
							</div>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-envelope"></span>
							  <input type="text" class="form-control" placeholder="Endereço de e-mail">
							</div>
							<div class="input-group">
							  <span class="input-group-addon glyphicon glyphicon-asterisk"></span>
							  <input type="text" class="form-control" placeholder="Senha">
							</div>
							<br/>
							<input type="text" class="form-control" placeholder="R.G.">
							<input type="text" class="form-control" placeholder="CPF">
							<br/>
							<input type="text" class="form-control" placeholder="Rua">
							<input type="text" class="form-control" placeholder="Número">
							<input type="text" class="form-control" placeholder="Bairro">
							<input type="text" class="form-control" placeholder="Complemento">
							<input type="text" class="form-control" placeholder="Cidade">
							<select class="form-control" placeholder="Nome">
								<option selected disabled>Estado</option>
							</select>
							<button type="submit" class="btn btn-default btn-lg">Cadastrar</button>
						</form>
					</div>
				</div>
			</div>
		<?php require_once "includes/footer.php";?>
		</div>

	</body>

	<?php require_once "includes/foot.php";?>

</html>