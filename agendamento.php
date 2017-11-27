<?php require("header.php");?>
  <div class="container">
   <div class="row">
    <div class="col-xs-12">
      <h1 class="text-center">Showroom</h1>
    </div>
  </div>
  <div class="row">
	<form id="formAgendamento" method="post" action="server.php">
		<div id="mensagemResultado"></div>
		<div class="col-xs-6">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="name" class="form-control" id="name" value=""/>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" id="email"/>
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="text" name="phone" class="form-control" id="phone"/>
			</div>  
			</div>
		<div class="col-xs-6">
            <div class="form-group">
				<label>Data</label>
				<input type="text" name="date" class="form-control datepicker" id="date"/>
			</div>
			<div class="form-group">
                <label>Hora</label>
				<input type="text" name="time" class="form-control" id="time"/>
        </div>
		</div>
		<div class="col-sm-12 text-right npad">
			<input type="submit" class="btn btn-lg" id="submitAgendamento">
		</div>
	</form>
	
	
	<script>
	
	
	</script>
	
	
  </div>   
<?php require("footer.php");?>