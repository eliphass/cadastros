<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="utf-8">
        <title>Entrar | Cadastros ESFII</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?PHP
        require_once("styles.php");
        require_once("classes.php");
        
        if(isset($_POST['username']) && isset($_POST['password'])){
            
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
            
            $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());
            
            $result = $mysqli->query("SELECT * FROM profissional WHERE (cpf = '$username' OR username = '$username') AND passwd = '$password';") or die($mysqli->error());
            
            $user = $result->fetch_assoc();
            
            if($result->num_rows<=0){
                echo "<script>alert(\"Usuário ou senha incorreto(s)!\");window.location=\"entrar.php\"</script>";
            } else {		
                setcookie("usuario",$user['cns']);
                header("Location:index.php");
            }
        } elseif(isset($_COOKIE['usuario'])){
            header("Location:index.php");
        }
        
        if(isset($_GET['logout'])){
            setcookie("usuario","");
            header("Location:index.php");
        }
        ?>

    </head>
    <body>
        <?PHP require_once("header.php"); ?>

        <div class="container">

            <!-- Caixa de login -->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form role="search" action="entrar.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Usuário ou CPF">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Senha">
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="button" onclick="submit()">Entrar <i class="fa fa-login"></i></button>

                    </form>
                </div>
            </div>
            <!-- /Caixa de login -->

        </div>

        <?PHP require_once("footer.php"); ?>
    </body>
</html>