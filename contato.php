<!DOCTYPE html>
<html language="pt-br">
	<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

	</head>
<body>
 <form  method="POST"  action="">
  <div class="navbar navbar-default navbar-static-top">
	 <div class="container">
       <?PHP require_once 'include/menu.php';?>
    </div>    
  </div>
 
   <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Projeto Code Edcucation - Contato</h1>
        </div>         
      </div>
     <div class="container">
		 
		  <div class="row">
			  <div class="col-md-12">
				  <div class="form-group">
						     <label for="nome" class="col-sm-1 col-lg-3 control-label">Nome:</label>										
						 <div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="nome" id="nome" class="form-control" tabindex="1">
						 </div>
				  </div>
				   <div class="form-group">
						     <label for="email" class="col-sm-1 col-lg-3 control-label">Email:</label>										
						 <div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="email" id="email"  class="form-control" tabindex="2">
						 </div>
				  </div>
				  <div class="form-group">
						 <label for="assunto" class="col-sm-1 col-lg-3 control-label">Assunto:</label>										
						 <div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="assunto" id="assunto"  class="form-control" tabindex="3">
						 </div>
				  </div>
				  <div class="form-group">
						 <label for="mensagem" class="col-sm-1 col-lg-3 control-label">Mensagem:</label>										
						 <div class="col-sm-9 col-lg-10 controls">	 
							<textarea name="mensagem" id="mensagem"  tabindex="4"  class="form-control" rows="3"></textarea>
						 </div>
				  </div>
				  <div class="row"></div>
				  <div class="form-group">
							<hr>						
						 <div class="col-sm-9 col-lg-10 controls">	 
					      	<button type="submit" name="bt_salvar" id="bt_salvar" value="salvar"class="btn btn-block btn-lg btn-success">Enviar</button>
						 </div>
						
				  </div>
				</div>						 	
		  </div>	
		      <br><br>
		      <div class="row"><?PHP require_once'include/gravar_contato.php'; ?>	</div>
		  		 
		  </div>
	</div>
 	</form>
 </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
</html>
