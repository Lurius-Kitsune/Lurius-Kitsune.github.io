<?php
// Path: view/nav.php
//extract from https://stackoverflow.com/questions/3776682/php-calculate-age
function getAge(string $birthDate)
{
    //date in mm/dd/yyyy format; or it can be in other formats as well
    //explode the date to get month, day and year
    $birthDate = explode("/", $birthDate);
    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
        ? ((date("Y") - $birthDate[2]) - 1)
        : (date("Y") - $birthDate[2]));
    return $age;
}

$activePage = $_SERVER['REQUEST_URI'];

?>
<link rel="stylesheet" href="/css/nav.css">
<nav class="navbar navbar-dark bg-primary fixed-left navbar-expand-md col-lg-2" id="menu">
    <div class="container-fluid nav">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar">
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
    <?php require(VIEW . '/v_owner.html'); ?>
</nav>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>