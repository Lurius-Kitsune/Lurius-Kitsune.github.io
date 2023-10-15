<?php ob_start(); ?>
<div class="p-5 bg-body-tertiary rounded-34 img-1">

    <div class="box-lg rounded bg-white">
        <h3 class="text-center underline">
            Le site Nolark :
        </h3>
        <ul>
            <li>
                <span class="underline font-weight-bold">Bloc concernée :</span> <span class="font-italic">B 1.2</span>
            </li>
            <li>
                <span class="underline font-weight-bold">Durée :</span> <span class="font-italic">De Septembre à fin Décembre 2022</span>
            </li>
            <li>
                <span class="underline font-weight-bold">Description:</span>
                <p class="font-italic">
                    Ce site vise à avertir des dangers présents sur la route ainsi que l’importance du port du casque
                    pour les conducteurs de deux-roues. On y trouve une section visant à sensibiliser les usagers de
                    la route, une section d’achat en ligne avec une large gamme de produits disponible, mais aussi
                    une page de contact.
                </p>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-sm border-red">
                        <img class="card-img-top" src="/images/Nolark/acceuil_nolark.png">
                        <div class="card-body">
                            <p class="card-text">
                                La page d'acceuil du site Nolark.
                            </p>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/images/Nolark/acceuil_nolark.png" target="_blank">Voir</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-sm border-red">
                        <img class="card-img-top" src="/images/Nolark/nolark_html.png">
                        <div class="card-body">
                            <p class="card-text">
                                Le code HTML de la page d'acceuil.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/resources/Nolark_index.txt" target="_blank">Voir</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-sm border-red">
                        <img class="card-img-top" src="/images/Nolark/nolark_css.png">
                        <div class="card-body">
                            <p class="card-text">
                                Exemple de code CSS fait pour la page.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/resources/Nolark_css.txt">Voir</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-italic">
                Le projet Nolark est un site fictif développé pendant le début de la 1 ére année de BTS SIO par
                une série de TP réalisé par les étudiants afin d'apprendre les bases du développement en HTML,
                en CSS, en JS ainsi qu’une introduction sur le PHP.
            </p>
            <a href="https://github.com/Lurius-Kitsune/Tp-Nolark" target="_blank"><button class="btn btn-secondary" style="width: 135px"><span class="fa fa-github "></span> Code source</button></a>
            <a href="https://lurius-kitsune.github.io/Tp-Nolark/" target="_blank"><button class="btn btn-primary" style="width: 135px"><span class="fa fa-info-circle"></span> Voir la démo</button></a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$headerContent = '<link href="/css/realisations.css" rel="stylesheet">';
require(__DIR__ . '/../../../src/view/v_default.php');