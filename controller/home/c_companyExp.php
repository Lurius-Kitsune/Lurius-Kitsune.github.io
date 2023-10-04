<?php

use tools\Pager;

?>

<div class="rubrique clearfix" id="home-company-content">

    <?php
    // Evoliz company
    $isNew = true;
    $companyName = "Evoliz";
    $companyDuration = "2023 (8 sem.)";
    $companyImage = ["https://lamacompta.co/wp-content/uploads/2021/12/Evoliz-logo.png", "Logo de l'entreprise Evoliz"];
    $companyJob = "Developpeur Web";

    $companyTask = ["Ajout et amélioration de fonctionnalité de la solution Evoliz."];
    $companyTask[] .= "Maintenance et correction de la solution Evoliz.";
    $companyTask[] .= "Découverte du framework PHP Laravel et des methodes de développement avec pomodoro.";

    $rapportMany = true;
    $pager = new Pager(__DIR__ . '/../../view/home/v_workExpTab.php', get_defined_vars());
    echo $pager->renderPage();
    ?>

    <?php
    // Linexos company
    $isNew = false;
    $companyName = "Linexos";
    $companyDuration = "2021 (6 sem.)";
    $companyImage = ["https://ccibusiness.fr/sites/default/files/styles/photo_company_220_220/public/2021-07/Stickers.png?itok=VL_KVMO6", "Logo de l'entreprise Linexos"];
    $companyJob = "Developpement Python";

    $companyTask = ["Développement d’une API ainsi qu’une REST API en Python."];
    $companyTask[] .= "Travaille sur un début de projet d’un client de l’entreprise.";
    $companyTask[] .= "Découverte de python en autodidacte.";

    $rapportMany = null;
    $pager = new Pager(__DIR__ . '/../../view/home/v_workExpTab.php', get_defined_vars());
    echo $pager->renderPage();
    ?>

    <?php
    // Progial company
    $isNew = false;
    $companyName = "Progial";
    $companyDuration = "2021 (6 sem.)";
    $companyImage = ["https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/7e/8d/47/7e8d4748-511c-fbbf-8984-d53c362c97b1/source/512x512bb.jpg", "Logo de l'entreprise Progial"];
    $companyJob = "Administrateur réseaux";

    $companyTask = ["Supervision & Maintenance de serveur à distance."];
    $companyTask[] .= "Installation d'un cluster DHCP.";
    $companyTask[] .= "Déploiment de suite informatique à travers l'infratruture de l'entreprise.";

    $rapportMany = false;
    $pager = new Pager(__DIR__ . '/../../view/home/v_workExpTab.php', get_defined_vars());
    echo $pager->renderPage();
    ?>
</div>