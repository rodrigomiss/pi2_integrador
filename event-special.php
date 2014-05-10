<!DOCTYPE html>
<html lang="pt-br">
	<?php require_once "includes/head.php";?>	
	<body>
		<div class="container">
			<?php require_once "includes/header.php";?>

			<?php require_once "includes/main-menu.php";?>

			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<h2 class="event-title">Semana Acadêmica de Tecnologia em Sistemas para Internet 2014</h2>
					<h3 class="event-date">De 22/09/14 a 26/09/14</h3>
					<h4 class="event-address">Universidade Tecnológica Federal - Campus Guarapuava</h4>
					<h4 class="event-address">Avenida Professora Laura Pacheco Bastos, 800 - Bairro Industrial CEP 85053-510 - Guarapuava - PR</h4>
					<br/>
					<p class="event-short-description">Uma semana com vários eventos, incluindo palestras, minicursos, entre outras atividades, relacionadas ao curso de Tecnologia em Sistemas para Internet</p>
				</div>
				<div class="col-bordered col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<img class="event-thumbnail" src="media/image/event1.png" alt="...">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="event-long-description">A semana acadêmica do curso de Tecnologia em Sistemas para Internet - Campus Guarapuava ocorre anualmente. É uma semana diferenciada no curso, onde os participantes conseguem novos conhecimentos através de palestras e minicursos.</p>
				</div>
				<div class="col-xs-12">
					<button type="button" class="btn btn-default btn-lg">Inscrever-se</button>
					<br/><br/>
				</div>
			</div>
			

			<div class="row events">
				<h4>Eventos relacionados</h4>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			  	<a class="event-link" data-toggle="modal" data-target="#modalsubevent1">
				    <div class="thumbnail">
				      <img class="event-thumbnail" src="media/image/event1.png" alt="...">
				      <div class="caption">
				        <h3>Minicurso de Linux</h3>
				        <p>De 26/09/14</p>
				      </div>
			    	</div>
			    </a>
			  </div>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			    <a class="event-link" data-toggle="modal" data-target="#modalevent2">
			    	<div class="thumbnail">
			      <img class="event-thumbnail" src="media/image/event2.jpg" alt="...">
			      <div class="caption">
			        <h3>Evento 2</h3>
			        <p>De 22/09/14</p>
			      </div>
			    </div>
			   </a>
			  </div>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			    <a class="event-link" data-toggle="modal" data-target="#modalevent3">
			    	<div class="thumbnail">
			      <img class="event-thumbnail" src="img/placeholder-evento.png" alt="...">
			      <div class="caption">
			        <h3>Evento 3</h3>
			        <p>22/09/14</p>
			      </div>
			    </div>
			   </a>
			  </div>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			    <a class="event-link" data-toggle="modal" data-target="#modalevent4">
			    	<div class="thumbnail">
			      <img class="event-thumbnail" src="img/placeholder-evento-2.png" alt="...">
			      <div class="caption">
			        <h3>Evento 4</h3>
			        <p>23/09/14</p>
			      </div>
			    </div>
			   </a>
			  </div>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			    <a class="event-link" data-toggle="modal" data-target="#modalevent3">
			    	<div class="thumbnail">
			      <img class="event-thumbnail" src="img/placeholder-evento.png" alt="...">
			      <div class="caption">
			        <h3>Evento 5</h3>
			        <p>24/09/14</p>
			      </div>
			    </div>
			   </a>
			  </div>
			  <div class="event col-lg-2 col-md-2 col-sm-4 col-xs-6">
			    <a class="event-link" data-toggle="modal" data-target="#modalevent4">
			    	<div class="thumbnail">
			      <img class="event-thumbnail" src="img/placeholder-evento-2.png" alt="...">
			      <div class="caption">
			        <h3>Evento 6</h3>
			        <p>25/09/14</p>
			      </div>
			    </div>
			   </a>
			  </div>
			</div>

			<?php require_once "includes/footer.php";?>
		</div>
		<?php require_once "includes/modals.php";?>

	</body>

	<?php require_once "includes/foot.php";?>
</html>