<?php

use Luriusfox\MyPackage\Tools\Pager;

?>

<div id="home-study-content">
    <?php
    // BTS SIO
    $studyId = "btssio";
    $studyName = "BTS SIO option SLAM (en cours...)";
    $studyYearsPeriod = "2022&nbsp;-&nbsp;2024";
    $studyState = 'Brevet de Technicien Supérieur "Services Informatiques aux
                        Organisations", option "Solutions Logicielles et Applications
                        Métiers"';
    $studyDescription = ["Diplôme d'État de niveau Bac+2."];
    $studyDescription[] .= "Obtention de connaissance général et approfondie en developpement informatique.";
    $studyDescription[] .= "Consolidation sur le tronc commun des connaissances en réseaux et en systèmes.";
    $linkWebsite = "https://bts-sio.lyc-bonaparte.fr";
    echo Pager::renderPage(VIEW . '/home/v_studyTab.php', get_defined_vars());
    ?>

    <?php
    // BTS SIO
    $studyId = "bacprosn";
    $studyName = "Bac Pro S.N Option R.I.S.C";
    $studyYearsPeriod = "2017&nbsp;-&nbsp;2020";
    $studyState = '[Mention Trés Bien] Obtention du Baccalauréat professionnel "Systèmes Numérique" option "Réseaux
                        Informatique et Systèmes Communiquant"';

    $studyDescription = ["Diplôme d'État de niveau Bac."];
    $studyDescription[] .= "Administration de serveur et de réseau informatique.";
    $studyDescription[] .= "Obtention de connaissances en réseaux.";
    $studyDescription[] .= "Supervision et gestion de projet.";
    $studyDescription[] .= "Création Mini Eco-Entreprise en premiére année.";
    $linkWebsite = "https://lyceebranly.fr";
    echo Pager::renderPage(VIEW . '/home/v_studyTab.php', get_defined_vars());
    ?>

    <?php
    // BTS SIO
    $studyId = "dnb";
    $studyName = "Diplôme Nationale du Brevet";
    $studyYearsPeriod = "2018";
    $studyState = '[Mention Assez Bien] Obtenu';
    $studyDescription = null;
    $linkWebsite = null;
    echo Pager::renderPage(VIEW . '/home/v_studyTab.php', get_defined_vars());
    ?>
</div>