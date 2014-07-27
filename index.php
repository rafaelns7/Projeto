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
	<div class="navbar navbar-default navbar-static-top">
	 <div class="container">
       <?PHP require_once 'include/menu.php';?>
    </div>    
  </div>
   <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Projeto Code Edcucation</h1>
        </div>         
      </div>
     <div class="container">
			<div class="row">				 
				<div class="table">
                    <table>
                        <thead>
                           <td></td>
                           <td></td>
                           <td></td>

                        </thead>
                        <tbody>
                          <?php require_once'table_prod_index.php'?>
                        </tbody>
                    </table>

				</div>
		  </div>
		</div>



</body>
</html>
