<?php

    $activePage = $_SERVER['REQUEST_URI'];
?>
<nav class="navbar navbar-dark bg-primary fixed-top navbar-expand-md">
        
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar">
                <span class="sr-only">Navigation raccourcie</span>☰
            </button>
            <a class="navbar-brand" href="#">Mon portfolio</a>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="<?= $activePage === '/' ? 'active' : ''; ?> nav-link">
                            <span class="fa fa-home"></span> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/cv.php" class="<?= $activePage === '/pages/cv.php' ? 'active' : ''; ?> nav-link">
                            <span class="fa fa-id-badge"></span> C.V
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="<?= $activePage === '/pages/realisation/Nolark.php' ? 'active' : ''; ?> 
                                dropdown-toggle nav-link" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu .dropdown-menu-end" role="menu">
                            <li role="presentation" class="dropdown-header dropdown-item">
                                En autonomie</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Bot Discord Eski</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Texturisation modèle 3D</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Configuration de modèle 3D</a>
                            </li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Pendant mes études</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="/pages/realisation/Nolark.php">Nolark</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Mon portfolio</a>
                            </li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                En entreprise</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Projet de 1ère année</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Projet de 2ème année</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" role="button">
                            <span class="fa fa-graduation-cap"></span>
                            Jury E5 BTS SIO
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header dropdown-item" role="presentation">
                                Documentations contexte</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Présentation</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Application</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Missions à réaliser</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Annexes</a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Fiches d'examen</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Situation professionnelle n°1</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Situation professionnelle n°2</a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Démonstrations</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Démo SP n°1</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Démo SP n°2</a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item">
                                Codes sources</li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Sources SP n°1</a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-item" role="menuitem" href="#">Sources SP n°2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>