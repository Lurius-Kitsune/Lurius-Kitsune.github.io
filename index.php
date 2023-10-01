<?php

require_once __DIR__ . '/tools/autoload.php';
ob_start();

?>
<script src="/js/home.js" crossorigin="anonymous"></script>
<div class="p-lg-5 bg-body-tertiary img-1">
    <div class="box-lg rounded-top border-sm border-red bg-white">
        <img src="images/identiter.jpg" alt="Mon visage" class="img-thumbnail m-auto mb-1 d-block " style="height: 250px;">
        <p class="ml-1">
            Je m'appelle Lucas Bruel, j'ai 19 ans et, depuis tout petit, j'ai été baigné par l'informatique et les
            nouvelles technologies avec pour rêves d'être développeur dans les jeux vidéo.
        </p>
        <p class="ml-1">
            J'ai donc commencé par un baccalauréat professionnel Systèmes Numériques, en option Réseaux Informatique
            et systèmes communicant. Ceci m'ayant donné un bagage dans l'informatique plus précisément en réseaux, et donc, pendant mon BAC,
            j'ai pu découvrir la programmation et j'ai accroché, c'est pour cela que j'ai eu l'ambition de faire de mes 2 passions, mon métier.
        </p>
        <p class="ml-1">
            J'ai donc décider de rejoindre le BTS SIO avec l'option SLAM qui fut mon choix en rejoignant l'option SLAM de
            ce BTS. J'ai fait ce choix afin d'avoir les bagages requis et solide me permettant d'atteindre mon projet professionnel.
        </p>
        <div class="d-flex flex-column">
            <p class="ml-1">
                Je ne sais pas encore ou cette aventure professionnelle m'amènera, mais je ferais tout afin d'atteindre mon rêve&nbsp;!
            </p>
        </div>

        <?php require_once __DIR__ . '/view/home/v_homeMenu.html' ?>

        <div class="pt-3" id="home-content-wrapper">
            <?php require_once __DIR__ . '/controller/home/c_studyWrapper.php' ?>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$headerContent = '<link href="/css/index.css" rel="stylesheet">';

require(__DIR__ . '/model/default.php');
