<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Busca | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?PHP require_once("styles.php"); ?>
    </head>
    <body>
        <?PHP require_once("header.php"); ?>
        <?PHP
        require_once("classes.php");
        $user = new Profissional($_COOKIE['usuario']);
        
        $referer = "index";
        if(isset($_SERVER['HTTP_REFERER'])){
            if(substr_count($_SERVER['HTTP_REFERER'],"busca.php")>0){
                $referer = "busca";
            }
        }
        ?>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <?PHP
                    if(!isset($_POST['buscasimples']) && !isset($_POST['buscaavancada'])){
                    ?>

                    <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>

                    <!-- Busca avançada = Sem parâmetros -->
                    <form method="post">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <strong>Busca avançada</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 text-md-right text-center"><strong>Sexo</strong></div>
                                    <div class="col text-md-left text-center">
                                        <input type="radio" name="buscaavancada[sexo]" value="M"> <i class="fa fa-male"></i>&nbsp;
                                        <input type="radio" name="buscaavancada[sexo]" value="F"> <i class="fa fa-female"></i>&nbsp;
                                        <input type="radio" name="buscaavancada[sexo]" value="A" checked> <i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-3 text-md-right text-center vcenter"><strong>Idade</strong></div>
                                    <div class="col text-md-left text-center">
                                        <input type="number" name="buscaavancada[imin]" step="1" min="0" size="3" class="my-input"/>
                                        <span class="hidden-md hidden-lg"><br /></span>
                                        <input type="radio" name="buscaavancada[iminu]" value="meses"> meses&nbsp;
                                        <input type="radio" name="buscaavancada[iminu]" value="anos" checked> anos
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-md-right text-center vcenter">a</div>
                                    <div class="col text-md-left text-center">
                                        <input type="number" name="buscaavancada[imax]" step="1" min="0" size="3" class="my-input"/>
                                        <span class="hidden-md hidden-lg"><br /></span>
                                        <input type="radio" name="buscaavancada[imaxu]" value="meses"> meses&nbsp;
                                        <input type="radio" name="buscaavancada[imaxu]" value="anos" checked> anos
                                    </div>
                                </div>
                                <br />
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[hipertensao]" /></div>
                                    <div class="col-xs-5"><em>Hipertensão</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[diabetes]" /></div>
                                    <div class="col-xs-5"><em>Diabetes</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[asma]" /></div>
                                    <div class="col-xs-5"><em>Asma</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[dpoc]" /></div>
                                    <div class="col-xs-5"><em>DPOC</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[cancer]" /></div>
                                    <div class="col-xs-5"><em>Câncer</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[outrasdc]" /></div>
                                    <div class="col-xs-5"><em>Outras doenças crônicas</em></div>
                                </div>
                                <br />
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[tabagismo]" /></div>
                                    <div class="col-xs-5"><em>Tabagismo</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[alcool]" /></div>
                                    <div class="col-xs-5"><em>Usuário de álcool</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[outrasdrogas]" /></div>
                                    <div class="col-xs-5"><em>Usuário de outras drogas</em></div>
                                </div>
                                <br />
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[saudemental]" /></div>
                                    <div class="col-xs-5"><em>Saúde mental</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[vulnerabilidade]" /></div>
                                    <div class="col-xs-5"><em>Vulnerabilidade social</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[desnutricao]" /></div>
                                    <div class="col-xs-5"><em>Desnutrição</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[reabilitacao]" /></div>
                                    <div class="col-xs-5"><em>Reabilitação / Deficiência</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[tuberculose]" /></div>
                                    <div class="col-xs-5"><em>Tuberculose</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[hanseniase]" /></div>
                                    <div class="col-xs-5"><em>Hanseníase</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[acamado]" /></div>
                                    <div class="col-xs-5"><em>Acamado</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[domiciliado]" /></div>
                                    <div class="col-xs-5"><em>Domiciliado</em></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xs-1 text-sm-left"><input type="checkbox" name="buscaavancada[gestante]" /></div>
                                    <div class="col-xs-5"><em>Gestante</em></div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-default btn-block text-center">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                        <button class="btn btn-primary btn-xs btn-block text-center" page="index">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </button>
                    </form>
                    <!-- /Busca avançada = Sem parâmetros -->
                    <?PHP
                    } else {
                        
                        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

                        if(isset($_POST['buscasimples'])){
                            $busca = mb_strtoupper(stripslashes($_POST['buscasimples']));

                            $query = "SELECT cns FROM usuario WHERE ((cns LIKE '%".$busca."%') OR (nome LIKE '%".$busca."%') OR (npf LIKE '%".$busca."%')) AND microarea = '".$user->microarea."' ORDER BY nome ASC, npf ASC;";

                            /*echo "<pre>";echo $query;echo "</pre>";*/

                            $result = $mysqli->query($query) or die($mysqli->error());


                        } elseif(isset($_POST['buscaavancada'])){
                            $busca = $_POST['buscaavancada'];
                            
                            $query = "SELECT cns FROM usuario WHERE microarea = '".$user->microarea."' ";

                            if(isset($busca['hipertensao'])) $query .= "AND hipertensao = true ";
                            if(isset($busca['diabetes'])) $query .= "AND diabetes = true ";
                            if(isset($busca['asma'])) $query .= "AND asma = true ";
                            if(isset($busca['dpoc'])) $query .= "AND dpoc = true ";
                            if(isset($busca['cancer'])) $query .= "AND cancer = true ";
                            if(isset($busca['outrasdc'])) $query .= "AND outrasdc = true ";
                            if(isset($busca['tabagismo'])) $query .= "AND tabagismo = true ";
                            if(isset($busca['alcool'])) $query .= "AND alcool = true ";
                            if(isset($busca['outrasdrogas'])) $query .= "AND outrasdrogas = true ";
                            if(isset($busca['saudemental'])) $query .= "AND saudemental = true ";
                            if(isset($busca['vulnerabilidade'])) $query .= "AND vulnerabilidade = true ";
                            if(isset($busca['desnutricao'])) $query .= "AND desnutricao = true ";
                            if(isset($busca['reabilitacao'])) $query .= "AND reabilitacao = true ";
                            if(isset($busca['tuberculose'])) $query .= "AND tuberculose = true ";
                            if(isset($busca['hanseniase'])) $query .= "AND hanseniase = true ";
                            if(isset($busca['acamado'])) $query .= "AND acamado = true ";
                            if(isset($busca['domiciliado'])) $query .= "AND domiciliado = true ";
                            if(isset($busca['gestante'])) $query .= "AND gestante = true ";
                            
                            if($busca['sexo'] != "A"){
                                $query .= "AND sexo = '".$busca['sexo']."' ";
                            }

                            $query .= "ORDER BY nome ASC, npf ASC;";

                            /*echo "<pre>";echo $query;echo "</pre>";*/

                            $result = $mysqli->query($query) or die($mysqli->error);
                        }
                    ?>
                    <button class="btn btn-primary btn-xs btn-block text-center" page="<?= $referer; ?>">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>
                    <!-- Resultados da busca -->
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <span class="text-warning">Foram encontrados <?= $result->num_rows; ?> resultado(s).</span>
                        </div>
                    </div>

                    <?PHP
                        while($row = $result->fetch_assoc()){
                            $usuario = new Usuario($row['cns']);
                    ?>

                    <div class="panel panel-default" cns="<?= $usuario->cns; ?>">
                        <div class="panel-body">
                            <span class="label label-primary"><?= $usuario->npf; ?>-<?= $usuario->npi; ?></span> 
                            <span class="badge badge-default"><i class="fa fa-<?= $usuario->sexo; ?>"></i></span> 
                            <em><?= $usuario->nome; ?></em>
                            <br />

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
                            ?>
                        </div>
                    </div>
                    <?PHP
                        }
                    ?>
                    <button class="btn btn-primary btn-xs btn-block text-center" page="<?= $referer; ?>">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </button>
                    <?PHP
                    }
                    ?>


                </div>
            </div>
        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>
