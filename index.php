<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="/src/style/index.css">
    <link rel="stylesheet" href="/lib/bootstrap-4.5.3-dist/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="/lib/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <title>Nohan</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://dev.nohan.site" >Ce site est hébergé sur un raspberry pi et fonctionne avec </a>
            </li>
            <li class="nav-item">
                <img src="/media/images/docker.png" height="40px" alt="docker"/>
            </li>
            <li class="nav-item">
                <img src="/media/images/apache.png" height="40px" alt="apache"/>
            </li>
            <li class="nav-item">
                <img src="/media/images/php.png" height="40px" alt="php"/>
            </li>

            <li class="nav-item">
                <img src="/media/images/raspberry.png" height="40px" alt="rpi"/>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="#">CV</a>
            </li>
            -->

        </ul>
    </div>
</nav>

<body>
<div class="container" id="titre">
    <h2 class="text-md-center font-weight-bolder">Réseaux</h2>
</div>
<div class="container" id="selection">
    <a href="https://github.com/nohan68"><img class="shadow-lg p-3 mb-5 bg-white" height="200px" width="200px" src="/media/images/github.png"></a>
    <a href="https://www.linkedin.com/in/nohan-j-286140195/"><img class="shadow-lg p-3 mb-5 bg-white" height="200px" width="200px" src="/media/images/linkedin.png"></a>
    <a href=""><img class="shadow-lg p-3 mb-5 bg-white" height="200px" width="200px" src="/media/images/snapchat.png"></a>
    <a href="https://instagram.nohan.site"><img class="shadow-lg p-3 mb-5 bg-white" height="200px" width="200px" src="/media/images/instagram.png"></a>
</div>
    <div class="container" id="titre">
        <h2 class="text-md-center font-weight-bolder">Mes projets</h2>
    </div>
    <div class="container align" id="selection">
        <a class="projet" href="/src/projets/Bejeweled">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Bejeweled</div>
        </a>
        <a class="projet" href="/src/projets/Snake">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Snake</div>
        </a>
        <a class="projet" href="">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Gallerie</div>
        </a>
        <a class="projet" href="">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">OCR IA</div>
        </a>
        <a class="projet" href="">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Scanner de formulaire</div>
        </a>
        <a class="projet" href="">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Pong</div>
        </a>
        <a class="projet" href="">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/projets.png">
            <div class="title">Cryptid</div>
        </a>
    </div>


    <div class="container" id="titre">
        <h2 class="text-md-center font-weight-bolder">Informations</h2>
    </div>
    <div class="container" id="selection">
        <a class="projet" href="/src/media/cv.pdf">
            <img class="shadow-lg p-3 mb-5 bg-white" height="250px" width="250px" src="/media/images/cv.png">
            <div class="title">CV</div>
        </a>
    </div>
</body>
</html>
