<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Lista | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?PHP
        require_once("styles.php");
        require_once("classes.php");

        $microarea = $_COOKIE['microarea'];

        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

        $result = $mysqli->query("SELECT npf FROM usuario WHERE microarea = '".$microarea."' ORDER BY npf ASC;");
        ?>
    </head>
    <body>
        <?PHP require_once("header.php"); ?>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    
                    <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>

                    <button class="btn btn-default btn-block allow-wrap" cns="1">
                        <span class="label label-primary">23001-A</span> ELIPHAS LEVI GUIMARÃES DE SIQUEIRA
                        <br />
                        <span class="badge badge-default"><i class="fa fa-male"></i></span> 
                        <span class="label label-danger pull-right">HIP</span>
                        <span class="label label-warning pull-right">DIA</span>
                        <span class="label label-success pull-right">GES</span>
                    </button>
                    
                    <button class="btn btn-default btn-block allow-wrap" cns="2">
                        <span class="label label-primary">23001-A</span>
                        23001-A ELIPHAS LEVI GUIMARÃES DE SIQUEIRA
                        <br />
                        <span class="badge badge-default"><i class="fa fa-male"></i></span>
                        <span class="label label-danger pull-right">HIP</span>
                        <span class="label label-warning pull-right">DIA</span>
                        <span class="label label-success pull-right">GES</span>
                    </button>
                    
                    <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>

                </div>
            </div>

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>