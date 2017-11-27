<?php require("header.php");?>
  <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img  class="img-responsive" src="http://via.placeholder.com/1366x700" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img  class="img-responsive" src="http://via.placeholder.com/1366x700" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img  class="img-responsive" src="http://via.placeholder.com/1366x700" alt="...">
          <div class="carousel-caption">
          </div>
        </div>  
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
      <div class="col-sm-6">
       <h2>Entre em contato</h2>
       <p>Telefone: (54) 9 9999-9999<br>E-mail: academia.fithouse.com.br</p>
     </div>
     <div class="col-sm-6">
       <h2>Agende uma visita</h2>
       <button class="btn-default btn-lg"data-toggle="modal" data-target="#myModal">Agendar</button>
     </div>	
   </div>
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agendamento</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label>Telefone</label>
                  <input type="text" name="cellphone" class="form-control" id="phone">
                </div>  
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label>Data</label>
                  <input type="text" name="date" class="form-control" id="date">
                </div>
                <div class="form-group">
                  <label>Hora</label>
                  <input type="text" name="time" class="form-control" id="time">
                </div>  
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require("footer.php");?>