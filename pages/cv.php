<?php ob_start(); ?>
<div class="p-5 mb-4 bg-body-tertiary img-1">
    <div class="container">
        <div class="row cadreCV">
            <div id="cv-entete" class="text-center">
                <div id="cv-photo">
                    <img src="../images/identiter.jpg" alt="Ma photo d'identité">
                </div>
                <div id="cv-intro">
                    <h1>Bonjour, je m'appelle <span class="text-primary underline">Lucas</span> et voici mon CV</h1>
                </div>
            </div>

            <div class="col-xs-12 col-sm-7">
                <!-- Partie gauche -->
                <div class="rubrique clearfix">
                    <h2 class="underline"><span class="fa fa-comment "></span> En quelques mots...</h2>
                    <p>
                        Ayant actuellement 19 ans, je souhaite faire de ma passion pour le développement
                        mon métier, c'est pour cela que je fais actuellement un BTS Services Informatiques aux Organisations
                        afin de progresser dans le domaine et d'y acquérir les compétences requises&nbsp;!
                    </p>
                </div>
                <div class="rubrique clearfix">
                    <h2 class="underline"><span class="fa fa-graduation-cap"></span> Parcours scolaire</h2>
                    <ul id="parcours" class="clearfix">
                        <li>
                            <div class="date float-left">
                                <span class="fa fa-stop-circle"></span>&nbsp;2022
                            </div>
                            <div class="details float-right">
                                <h3>BTS SIO option SLAM (en cours...)</h3>
                                <p>Brevet de Technicien Supérieur "Services Informatiques aux
                                    Organisations", option "Solutions Logicielles et Applications
                                    Métiers"</p>
                            </div>
                        </li>
                        <li>
                            <div class="date float-left">
                                <span class="fa fa-stop-circle"></span>&nbsp;2021
                            </div>
                            <div class="details float-right">
                                <h3>Bac Pro S.N Option R.I.S.C</h3>
                                <p>Obtention du Baccalauréat professionnel "Systèmes Numérique" option "Réseaux
                                    Informatique et
                                    Systèmes Communiquant" avec Mention (Trés Bien)</p>
                            </div>
                        </li>
                        <li>
                            <div class="date float-left">
                                <span class="fa fa-stop-circle"></span>&nbsp;2018
                            </div>
                            <div class="details float-right">
                                <h3>Diplôme Nationale du Brevet</h3>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="rubrique clearfix">
                    <h2 class="underline"><span class="fa fa-briefcase"></span> Expériences professionnelles</h2>
                    <div class="experience clearfix">
                        <div class="col-3">
                            <div class="lieu">Linexos</div>
                            <div class="date">2021 (6 sem.)</div>
                        </div>
                        <div class="col-9">
                            <div class="profession">Developpement Python</div>
                            <div class="details">
                                <ul>
                                    <li>Développement d’une API ainsi qu’une REST API en Python.</li>
                                    <li>Travaille sur un début de projet d’un client de l’entreprise.</li>
                                    <li>Découverte de python en autodidacte.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="experience clearfix">
                        <div class="col-3">
                            <div class="lieu">Progial</div>
                            <div class="date">2021 (6 sem.)</div>
                        </div>
                        <div class="col-9">
                            <div class="profession">Administratuer réseaux</div>
                            <div class="details ">
                                <ul>
                                    <li>Supervision & Maintenance de serveur à distance.</li>
                                    <li>Installation d'un cluster DHCP.</li>
                                    <li>Déploiment de suite informatique à travers l'infratruture de l'entreprise.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5">
                <!-- Partie droite -->
                <div class="rubrique clearfix mb-3" id="contact">
                    <h2 class="underline"><span class="fa fa-user"></span> Me contacter</h2>
                    <div class="meContacter">
                        <div class="details float-left">
                            <a href="mailto:lucasfox@outlook.fr?subject=Contact depuis le CV en ligne" title="Mail de Lucas Bruel">
                                <img class="contact-icon" src="../images/cv/mail-dreamstale47.png" alt="Icone de mail"> Outlook.fr
                            </a>
                        </div>
                    </div>
                    <div class="meContacter">
                        <div class="details float-left">
                            <a href="https://github.com/Lurius-Kitsune" title="Lien vers le profil GitHub de Lucas Bruel">
                                <img class="contact-icon" src="../images/cv/github2-dreamstale35.png" alt="Icone de GitHub"> GitHub
                            </a>
                        </div>
                    </div>
                </div>
                <div id="langues" class="rubrique clearfix">
                    <h2 class="underline"><span class="fa fa-flag"></span> Langue</h2>
                    <div class="container">
                        <div class="langue">Français</div>
                        <div class="niveau">
                            <span class="badge badge-dark">A1</span>
                            <span class="badge badge-dark">A2</span>
                            <span class="badge badge-dark">B1</span>
                            <span class="badge badge-dark">B2</span>
                            <span class="badge badge-primary">C1</span>
                            <span class="badge badge-dark">C2</span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="langue">Anglais</div>
                        <div class="niveau">
                            <span class="badge badge-dark">A1</span>
                            <span class="badge badge-dark">A2</span>
                            <span class="badge badge-dark">B1</span>
                            <span class="badge badge-primary">B2</span>
                            <span class="badge badge-dark">C1</span>
                            <span class="badge badge-dark">C2</span>
                        </div>
                    </div>
                </div>
                <div id="competences" class="rubrique clearfix">
                    <h2 class="underline"><span class="fa fa-wrench"></span> Compétences</h2>
                    <div class="container">
                        <div class="libelle">Intégration web</div>
                        <div class="classement classement3"></div>
                    </div>
                    <div class="container">
                        <div class="libelle">Dév. web</div>
                        <div class="classement classement4"></div>
                    </div>
                    <div class="container">
                        <div class="libelle">Orienté Objet</div>
                        <div class="classement classement2"></div>
                    </div>
                    <div class="container">
                        <div class="libelle">administrateur réseaux</div>
                        <div class="classement classement3"></div>
                    </div>
                    <div class="container">
                        <div class="libelle">Texurisation 3D</div>
                        <div class="classement classement2"></div>
                    </div>
                    <div id="langue_prog">
                        <h4 class="text-primary underline"><span class="fa fa-at"></span> Langues de programmation</h4>
                        <div class="container pl-5">
                            <div class="libelle">Python</div>
                            <div class="classement classement4"></div>
                        </div>
                        <div class="container pl-5">
                            <div class="libelle">Java</div>
                            <div class="classement classement1"></div>
                        </div>
                        <div class="container pl-5">
                            <div class="libelle">VBA</div>
                            <div class="classement classement4"></div>
                        </div>
                        <div class="container pl-5">
                            <div class="libelle">C++</div>
                            <div class="classement classement0"></div>
                        </div>
                        <div class="container pl-5">
                            <div class="libelle">C#</div>
                            <div class="classement classement0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Emplacement pour le contenu principal de la page -->
<?php
$content = ob_get_clean();
$headerContent = '<link href="/css/cv.css" rel="stylesheet">';
require('../view/default.php');
