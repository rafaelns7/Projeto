<!DOCTYPE html>
<html language="pt-br">
	<head>
			<link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<style>
	    html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
   
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 507px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }
      </style>    
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
					  			 			 
		  </div>
		</div>
	
		 <div id="footer">
      <div class="container">
       <p>Todos os direitos reservados - <?PHP echo date(Y);?></p>
      </div>
    </div> 
 
</body>
</html>