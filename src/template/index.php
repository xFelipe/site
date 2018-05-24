<?php
	getPageHeader(
		array(
			"description" => "Encontre tudo o que precisar na sua região por aqui",
			"page-title" => "Eu Quero"
		)
	);
?>
	<body>
		<?php getNavbar() ?>
		<div class="container-fluid" style="padding: 0; margin-top: 3.5em">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  	<!-- Indicators -->
			  	<ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  	</ol>

			  	<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
				    <div class="item active">
				      	<img width="100%" src="http://via.placeholder.com/350x150" alt="First slide">
			      		<div class="carousel-caption">
				        	<h1>Olha o titulo</h1>
				        	<p>Texto básico</p>
				      	</div>
				    </div>
				    <div class="item">
				      	<img width="100%" src="http://via.placeholder.com/350x150" alt="Second slide">
				      	<div class="carousel-caption">
				        	<h1>Olha o titulo 2 hehe</h1>
				        	<p>Outro texto básico</p>
				      	</div>
				    </div>
			  	</div>

			  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <i class="material-icons">keyboard_arrow_left</i>
				    <span class="sr-only">Prev</span>
			  	</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <i class="material-icons">keyboard_arrow_right</i>
				    <span class="sr-only">Next</span>
			  	</a>
			</div>

		</div>

		<script src="/js/jquery-1.12.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/propeller.min.js"></script>
	</body>
</html>
