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
                <table class="table">
                    <thead>
                      <tr>
                        <td>Nome</td>
                        <td>Valor</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                     <?php require_once 'tabela_prod.php' ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

 </div>
<?php require_once'include/footer.php'?>

</body>
</html>
