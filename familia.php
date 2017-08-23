<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Famílias | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?PHP 
        require_once("styles.php");
        require_once("classes.php");
        
        $user = new Profissional($_COOKIE['usuario']);

        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

        $result = $mysqli->query("SELECT npf FROM usuario WHERE microarea LIKE '".$user->microarea."' GROUP BY npf ORDER BY npf ASC;");

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

                    <?PHP 
                    if(isset($_GET['npf'])){
                        $familia = new Familia($_GET['npf']);
                    ?>

                    <!-- Com NPF -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <strong><?= $familia->npf; ?></strong><br />
                            <em><?= $familia->responsavel->nome; ?></em>
                        </div>
                        <div class="panel-body">
                            <?PHP
                                foreach($familia->membros as $cns){
                                    $usuario = new Usuario($cns);
                            ?>
                            <button class="btn btn-default btn-block allow-wrap" cns="<?= $usuario->cns; ?>">
                                <span class="label label-primary"><?= $usuario->npi; ?></span> <?= $usuario->nome; ?>
                                <br />
                                <span class="badge badge-default"><i class="fa fa-<?= $usuario->sexo; ?>"></i></span> 
                                <?PHP
                                    if($usuario->hipertensao){
                                ?>
                                <span class="label label-danger pull-right">HIP</span>
                                <?PHP
                                    }
                                ?>
                                <?PHP
                                    if($usuario->diabetes){
                                ?>
                                <span class="label label-warning pull-right">DIA</span>
                                <?PHP
                                    }
                                ?>
                                <?PHP
                                    if($usuario->gestante){
                                ?>
                                <span class="label label-success pull-right">GES</span>
                                <?PHP
                                    }
                                }
                                ?>
                            </button>
                        </div>
                    </div>
                    <!-- /Com NPF -->

                    <?PHP
                    } else {
                        while($row = $result->fetch_assoc()){
                            $familia = new Familia($row['npf']);
                            /*echo "<pre>";print_r($familia);echo "</pre>";*/
                    ?>
                    <!-- Sem NPF -->
                    <button class="btn btn-default btn-block allow-wrap" npf="<?= $familia->npf; ?>">
                        <span class="label label-primary"><?= $familia->npf; ?></span> <em><?= $familia->responsavel->nome; ?></em>
                        <br />
                        <span class="badge badge-default"><i class="fa fa-users"></i> <?= $familia->pessoas; ?></span>
                        <?PHP
                            if($familia->hipertensao){
                        ?>
                        <span class="label label-danger pull-right">HIP</span>
                        <?PHP
                            }
                        ?>
                        <?PHP
                            if($familia->diabetes){
                        ?>
                        <span class="label label-warning pull-right">DIA</span>
                        <?PHP
                            }
                        ?>
                        <?PHP
                            if($familia->gestante){
                        ?>
                        <span class="label label-success pull-right">GES</span>
                        <?PHP
                            }
                        ?>
                    </button>
                    <!-- /Sem NPF -->

                    <?PHP
                        }
                    }
                    ?>

                    <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>

                </div>
            </div>

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>
