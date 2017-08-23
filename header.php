<!-- Barra de navegação -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a id="top"></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"><i class="fa fa-home"></i> Início</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a>Versão: 0.9b</a></li>
                <?PHP
                if(!isset($_COOKIE['usuario'])){
                ?>
                <li><a href="entrar.php"><i class="fa fa-sign-in"></i> Entrar</a></li>
                <?PHP
                } else {
                ?>
                <li><a href="meuperfil.php"><i class="fa fa-cogs"></i> Meu perfil</a></li>
                <li><a href="changelog.php"><i class="fa fa-code"></i> Changelog</a></li>
                <li><a href="entrar.php?logout"><i class="fa fa-sign-out"></i> Sair</a></li>
                <?PHP
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- /Barra de navegação -->