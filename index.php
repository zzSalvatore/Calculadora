<?php
require 'verifica.php';

if(isset($_SESSION['id_cliente']) && !empty($_SESSION['id_cliente'])): ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Calculadora</title>
</head>
<body>
    <img src="./img/17973908.jpg" alt="Imagem representando um fundo tecnológico" data-img="header">
    <header class="header__container">
        <h1 class="welcome">Olá <?php echo $nomeUser ?>!</h1>

        <ul class="nav nav-pills nav-fill gap-2 p-1 rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: #13446e; --bs-nav-pills-link-active-color: #fdfdfd; --bs-nav-pills-link-active-bg: #49439f;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="button" aria-selected="false">Início</button>
            </li>
            <li class="nav-item" role="presentation">
                <div class="dropdown">
                    <button class="nav-link rounded-5 btn btn-secondary dropdown-toggle" id="perfil-tab2" data-bs-toggle="dropdown" type="button" role="tab" aria-expanded="false">Perfil</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?pg=editarPerfil">Editar Perfil</a></li>
                        <li><a class="dropdown-item" href="index.php?pg=config">Configurações</a></li>
                    </ul>
                </div>            
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contato</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="sair-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Sair</button>
            </li>
        </ul>
    </header>

    <main class="main__container__home flex-column w-100 h-auto">
        <?php
        $pg = "";
        if(isset($_GET["pg"]) && !empty($_GET["pg"])){
            $pg = addslashes($_GET["pg"]);
        }
        switch($pg){
            case 'editarPerfil' : require 'editarPerfil.php';
            break;
            case 'config' : require 'config.php';
            break;
            default: require 'home.php';
        }
        ?>
    </main>

    
    



    <footer>
        <a href="http://www.freepik.com">Designed by coolvector / Freepik</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
    <script src="./script/index.js"></script>
</body>
</html>

<?php else: header("Location: login.html"); endif; ?>