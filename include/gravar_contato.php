
<?PHP
 if(isset($_POST['bt_salvar']) && $_POST['bt_salvar']  == 'salvar'){
		  $nome    = $_POST['nome'];
		  $email   = $_POST['email'];
		  $assunto = $_POST['assunto'];
		  $mensa   = $_POST['mensagem'];
		  $erro = 0;
		  if(empty($nome)){
		  	echo" <div class='alert alert-warning alert-dismissible' role='alert'>
		 
		   
		  <strong>Warning!</strong> Nome não pode ser vazio.
		   </div>"; 
		  $erro = 1;	
		  }
		  if(empty($email)){
		  	echo" <div class='alert alert-warning alert-dismissible' role='alert'>
		   
		  <strong>Warning!</strong> E-mail não pode ser vazio.
		   </div>"; 
		  	$erro = 1;
		  }
		  if(empty($assunto)){
		  	echo" <div class='alert alert-warning alert-dismissible' role='alert'>
		  <strong>Warning!</strong> Assunto não pode ser vazio.
		   </div>"; 
		  $erro = 1;	
		  }
		  if(empty($mensa)){
		  	echo" <div class='alert alert-warning alert-dismissible' role='alert'>
		   <strong>Warning!</strong> Assunto não pode ser vazio.
		   </div>"; 
		  $erro = 1;	
		  }
		  
		  if($erro !=1){
		  	echo '<div class="row">
		  	        <strong>Dados enviados com sucesso</strong>
		  	        <br>
		  	        <div class="row">
		  	          <br>
		  	          <label>Nome:</label>'.$nome.'<br>	
		  	          <label>E-mail:</label>'.$email.'<br>
		  	          <label>Assunto:</label>'.$assunto.'<br>
		  	          <label>Mensagem:</label>'.$mensa.'<br>
		  	        </div>
		          </div>';
		  	 
		  	
		  }
 }
?>  			 			 
