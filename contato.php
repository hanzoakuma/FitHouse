<?php require("header.php");?>
  <div class="container">
   <div class="row">
    <div class="col-xs-12">
      <h1 class="text-center h101">Contato</h1>
    </div>
	</div>
    <div class="row">
      <div class="col-sm-6">
        <h3>Nossa Localização</h3>
        <div> 
         <p>Academia Fit House</p>
         <p>Address 1</p>
		 <p id="address">ESTE<p>
         <p>Telefone</p>
         <p id="phone"></p>
         <p>Horarios</p>
         <p id="time"></p>
       </div>
     </div>
     <div class="col-sm-5 col-sm-offset-1">
	  <div class="text-center" id="mensagemResultado"></div>
      <form id="formcontato"  method="post" action="server.php">
        <div class="form-group">
          <label for="name">Nome completo</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="email">Telefone</label>
          <input type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="form-group">
          <label>Assunto</label>
          <select name="subject" id="subject" class="form-control">
            <option value="">Selecione</option>
			<option value="PosCompra">Pos compra</option>
            <option value="PreCompra">Pre compra</option>
            <option value="Outras">Outros</option>
          </select>
        </div>
        <div class="form-group">
          <label for="question">Dúvida</label>
          <textarea name="question" class="form-control" id="question" rows="10"></textarea>
        </div>
		<div class="col-sm-12 text-right npad">
		<input type="submit" class="btn btn-lg" id="submitContato">
		</div>
      </form> 
    </div>
  </div>
</div>
<?php require("footer.php");?>