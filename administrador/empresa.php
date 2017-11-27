<!DOCTYPE html>
<html>
<head>
	<title>Fit House</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="./plugin/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="./principal.css">
</head>
<body>
	<div class="container-fluid">
	<header id="header" class="navbar navbar-static-top">
		
			<div class="navbar-header" id="header-logo">
				<a href="#" class="navbar-brand"><span id="fit">Fit</span><span id="house">House</span></a>
			</div>
			<div class="text-right" id="header-logout">
				<a href="index.php" class="navbar-brand text-right"><span class="glyphicon glyphicon-log-out"></span></a>
			</div>
	</header>
	<div class="row">
		<div class="col-xs-3 col-sm-1 col-md-1 text-left menuleft">
			<ul class="nav nav-pills nav-stacked">
			<li><a>Paginas</a>
				<ul id="pgndroopdown" class="nav nav-pills nav-stacked text-left">
					<li><a href="principal.php">Home</a></li>
					<li><a href="empresa.php">Empresa</a></li>
					<li><a href="servico.php">Serviços</a></li>
					<li><a href="showroom.php">Showroon</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</li>
			<li><a>Contatos</a>
				<ul id="cttdroopdown" class="nav nav-pills nav-stacked text-left">
					<li><a>Agenda</a></li>
					<li><a>Mensagem</a></li>
				</ul>
			</li>
			</ul>
		</div>
		<div class="col-xs-9 col-sm-offset-1 text-center">
			<h1>Administrador Empresa</h1>
			<div class=" col-xs-12 col-md-4">
				<form>
					<div class="form-group">
						<label for="question">Historia da Empresa</label>
						<textarea class="form-control" id="question" rows="10"></textarea>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-1">
				<form class="text-left">
					<div class="form-group">
						<label for="exampleInputFile">Imagen 1</label>
						<input type="file" id="exampleInputFile">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Imagen 2</label>
						<input type="file" id="exampleInputFile">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Imagen 3</label>
						<input type="file" id="exampleInputFile">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Imagen 4</label>
						<input type="file" id="exampleInputFile">
					</div>
					<div>
						<input class="btn btn-default" type="button" value="cancelar">
						<input class="btn btn-default" type="button" value="Salvar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
<script src="./plugin/js/jquery-3.2.1.js"></script>
<script src="./plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="./plugin/jsvalidate/dist/jquery.validate.js"></script>	
<script src="./plugin/jsvalidate/dist/additional-methods.js"></script>
<script src="./plugin/jquery-ui-1.12.1.custom/jquery-ui.js"></script>	
<script type="text/javascript" src="./principal.js"></script>
</body>
</html>