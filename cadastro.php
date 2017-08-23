<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <?PHP
        require_once("header.php");
        require_once("classes.php");
        $usuario = new Usuario($_GET['cns']);
        
        ?>
        <meta charset="utf-8">
        <title><?= $usuario->npf; ?>-<?= $usuario->npi; ?> | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?PHP require_once("styles.php"); ?>
    </head>
    <body>
        

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <button class="btn btn-primary btn-xs btn-block text-center" page="lista">
                        <i class="fa fa-arrow-left"></i> Lista completa
                    </button>        
                    
                    <button class="btn btn-default btn-xs btn-block text-center" npf="<?= $usuario->npf; ?>">
                        <i class="fa fa-users"></i> Família <?= $usuario->npf; ?>
                    </button>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <strong>Dados cadastrais</strong>
                        </div>
                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-md-3 text-md-right text-center"><strong>Prontuário</strong></div>
                                <div class="col text-md-left text-center"><em><?= $usuario->npf; ?>-<?= $usuario->npi; ?></em></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 text-md-right text-center"><strong>Nome</strong></div>
                                <div class="col text-md-left text-center text-uppercase"><em><?= $usuario->nome; ?></em></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 text-md-right text-center"><strong>CNS</strong></div>
                                <div class="col text-md-left text-center"><em><?= $usuario->cns; ?><br />( <?= $usuario->cnsChunk; ?> )</em></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 text-md-right text-center"><strong>Sexo</strong></div>
                                <div class="col text-md-left text-center"><i class="fa fa-<?= $usuario->sexo; ?>"></i></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 text-md-right text-center"><strong>Nascimento</strong></div>
                                <div class="col text-md-left text-center"><em><?= $usuario->nascimento->format("d/m/Y"); ?></em></div>
                            </div>
                            
                            <div class="row hidden">
                                <div class="col-md-3 text-md-right text-center"><strong>Idade</strong></div>
                                <div class="col text-md-left text-center"><em>XX anos</em></div>
                            </div>
                            
                        </div>
                        
                        <div class="panel-heading text-center">
                            <strong>Doenças Crônicas</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->hipertensao); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Hipertensão</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->diabetes); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Diabetes</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->asma); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Asma</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->dpoc); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>DPOC</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->cancer); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Câncer</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->outrasdc); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Outras doenças crônicas</em></div>
                            </div>
                        </div>
                        
                        <div class="panel-heading text-center">
                            <strong>Hábitos</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->tabagista); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Tabagismo</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->alcool); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Usuário de álcool</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->outrasdrogas); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Usuário de outras drogas</em></div>
                            </div>
                        </div>
                        
                        <div class="panel-heading text-center">
                            <strong>Outras condições</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->saudemental); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Saúde mental</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->vulnerabilidade); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Vulnerabilidade social</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->desnutricao); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Desnutrição</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->reabilitacao); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Reabilitação / Deficiência</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->tuberculose); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Tuberculose</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->hanseniase); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Hanseníase</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->acamado); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Acamado</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->domiciliado); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Domiciliado</em></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xs-1 text-sm-left"><i class="fa fa-<?= $usuario->iconCheck($usuario->gestante); ?>square-o"></i></div>
                                <div class="col-xs-5"><em>Gestante</em></div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-default btn-block text-center" npf="<?= $usuario->npf; ?>">
                        <i class="fa fa-users"></i> Família <?= $usuario->npf; ?>
                    </button>
                    
                    <button class="btn btn-primary btn-block text-center" page="lista">
                        <i class="fa fa-arrow-left"></i> Lista completa
                    </button>
                    
                </div>
            </div>

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>
