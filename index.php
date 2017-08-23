<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Início | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?PHP require_once("styles.php"); ?>
    </head>
    <body>
        <?PHP require_once("header.php"); ?>

        <div class="container">
            
            <?PHP
            if(!isset($_COOKIE['usuario'])){
            ?>
            <!-- Entrar -->
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <button class="btn btn-default btn-block" type="button" page="entrar">Entrar <i class="fa fa-sign-in"></i></button>
                </div>
            </div>
            <!-- /Entrar -->
            <?PHP
            } else {
            ?>
            <!-- Caixa de pesquisa -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form role="search" action="busca.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="buscasimples" class="form-control" placeholder="Prontuário, Nome ou CNS">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" onclick="submit()"><i class="fa fa-search"></i> Pesquisar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Caixa de pesquisa -->
            
            <!-- Pesquisa avançada -->
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <button class="btn btn-default btn-block" type="button" page="busca"><span class="badge pull-right"><i class="fa fa-search-plus"></i></span> Busca Avançada</button>
                </div>
            </div>
            <!-- /Pesquisa avançada -->
            
            <!-- Listagem de famílias -->
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <button class="btn btn-default btn-block" type="button" page="familia"><span class="badge pull-right"><i class="fa fa-users"></i></span> Listagem de famílias</button>
                </div>
            </div>
            <!-- /Listagem de famílias -->
            
            <!-- Listagem de pessoas -->
            <div class="row justify-content-center hidden">
                <div class="col-md-8 text-center">
                    <button class="btn btn-default btn-block" type="button" page="lista"><span class="badge pull-right"><i class="fa fa-list"></i></span> Listagem completa</button>
                </div>
            </div>
            <!-- /Listagem de pessoas -->
            <?PHP
            }
            ?>

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>
