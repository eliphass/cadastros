<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Changelog | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?PHP require_once("styles.php"); ?>
    </head>
    <body>
        <?PHP
        require_once("header.php");
        require_once("classes.php");

        ?>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>        

                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <strong>O que há de novo?</strong>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col text-md-left text-center">
                                    <p>O sistema foi criado com o objetivo principal de proporcionar aos ACS a comodidade do acesso remoto às informações dos usuários moradores de suas microáreas.</p>
                                    <p>São englobadas, atualmente, funções de pesquisa simples, como busca pelos hipertensos, diabéticos, separando-os por sexo, por exemplo.</p>
                                    <p>Por ora, cada um só consegue visualizar e pesquisar os cadastros de sua microárea, mas isso logo vai mudar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-info">
                        <div class="panel-heading text-center panel-success">
                            <strong>O que virá?</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col text-md-left text-center">
                                    <ul>
                                        <li>Cada usuário poderá escolher o próprio tema, dentre 18 disponíveis, através do seu perfil.</li>
                                        <li>Opção de pesquisa e visualização de cadastros de outras microáreas.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading text-center panel-success">
                            <strong>O que passou?</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col text-md-left text-center">
                                    <p>&nbsp;</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center panel-success">
                            <strong>O que está errado?</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col text-md-left text-center">
                                    <p>&nbsp;</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn-primary btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>

                </div>
            </div>

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>
