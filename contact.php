<!DOCTYPE html>
<html lang="pt-br">
	<?php require_once "includes/head.php";?>	
	<body>
		<div class="container">
			<?php require_once "includes/header.php";?>

			<?php require_once "includes/main-menu.php";?>

			<div class="row">
				<div id="content" class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
					<h3>Contato</h3>
					<div id="contact-form" class="row">
						<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-sm-offset-1">
							<form>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-user"></span>
								  <input type="text" class="form-control" placeholder="Nome">
								</div>
								<div class="input-group">
								  <span class="input-group-addon glyphicon glyphicon-envelope"></span>
								  <input type="text" class="form-control" placeholder="E-mail">
								</div>
								<div class="input-group">
								  <span class="input-group-addon glyphicon glyphicon-asterisk"></span>
								  <input type="textarea" class="form-control" placeholder="Mensagem">
								</div>
								<button type="submit" class="btn btn-default btn-lg">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		<?php require_once "includes/footer.php";?>
		</div>

	</body>

	<?php require_once "includes/foot.php";?>

</html>