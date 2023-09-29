<?php

ob_start();

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/' . $class_name . '.php';
});

?>
<script src="/js/home.js" crossorigin="anonymous"></script>
<div class="p-5 bg-body-tertiary img-1">
    <div class="box-lg rounded-top border-sm border-red bg-white">
        <h1 class="underline">LUCAS BRUEL, FUTUR GAME DÉVELOPPEUR</h1>
        <img src="images/identiter.jpg" alt="Mon visage" class="img-thumbnail mr-2 float-left " style="height: 310px;">
        <p class="ml-1">
            Je m'appelle Lucas Bruel, j'ai 19 ans et depuis tout petit, j'ai été baigné par l'informatique et les
            nouvelles technologies.
        </p>
        <p class="ml-1">
            J'ai donc poursuivis cette envie et me suis inscrit en B.T.S SIO après mon baccalauréat professionnel
            Systèmes Numériques et Numériques
            en option Réseaux Informatique et systèmes communicant m'ayant donnés un bagage dans l'informatique plus
            précisément en réseaux,
            et donc, pendant mon BAC, j'ai eu l'ambition de faire de ma passion, mon métier.
        </p>
        <p class="ml-1">
            Ces pour cela que je me suis axé dans le développement, fut mon choix en rejoi
            gnant l'option SLAM de
            ce BTS, cela me permettra
            d'avoir les bagages requis permettant d'atteindre mon projet professionnel.
        </p>
        <div class="d-flex flex-column">
            <p class="ml-1">
                Après avoir effectué plusieurs formations en milieu professionnel, principalement dans le domaine du
                développement informatique,
                je souhaite poursuivre mon expérience professionnelle dans ce domaine afin de devenir "game dev"
            </p>
        </div>

        <?php require_once __DIR__ . '/view/home/homeMenu.html' ?>

        <div class="pt-3" id="home-content-wrapper">
            <?php require_once __DIR__ . '/controller/home/c_studyWrapper.php' ?>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$headerContent = '<link href="/css/index.css" rel="stylesheet">';

require('./model/default.php');
