<?php

use Luriusfox\MyPackage\Tools\Pager;

?>

<div id="home-study-content">
    
<?php
// BTS SIO
$studyTable = [];
$studyTable['btssio'] = [
    'name' => "BTS SIO option SLAM (en cours...)",
    'yearsPeriod' => "2022&nbsp;-&nbsp;2024",
    'state' => '<span class="badge text-bg-info">EN COURS</span> Brevet de Technicien Supérieur "Services Informatiques aux
                        Organisations", option "Solutions Logicielles et Applications
                        Métiers"',
    'description' => [
        "Diplôme d'État de niveau Bac+2.",
        "Obtention de connaissance général et approfondie en developpement informatique.",
        "Consolidation sur le tronc commun des connaissances en réseaux et en systèmes.",
    ],
    'linkWebsite' => "https://bts-sio.lyc-bonaparte.fr"
];

// BAC PRO SN
$studyTable['bacprosn'] = [
    'name' => "Bac Pro S.N Option R.I.S.C",
    'yearsPeriod' => "2017&nbsp;-&nbsp;2020",
    'state' => '<span class="badge text-bg-info">Mention trés bien</span> Baccalauréat professionnel "Systèmes Numérique" option "Réseaux
                        Informatique et Systèmes Communiquant"',
    'description' => [
        "Diplôme d'État de niveau Bac.",
        "Administration de serveur et de réseau informatique.",
        "Obtention de connaissances en réseaux.",
        "Supervision et gestion de projet.",
        "Création Mini Eco-Entreprise en premiére année."
    ],
    'linkWebsite' => "https://lyceebranly.fr"
];


$studyTable['dnb'] = [
    'name' => "Diplôme Nationale du Brevet",
    'yearsPeriod' => "2018",
    'state' => '<span class="badge text-bg-info">Mention assez bien</span>',
    'description' => null,
    'linkWebsite' => null
];
foreach ($studyTable as $studyKey => $studyValue) {
    Pager::renderView(VIEW . '/home/v_studyTab.php', [
        'studyId' => $studyKey,
        'studyName' => $studyValue['name'],
        'studyYearsPeriod' => $studyValue['yearsPeriod'],
        'studyState' => $studyValue['state'],
        'studyDescription' => $studyValue['description'],
        'linkWebsite' => $studyValue['linkWebsite']
    ]);
}
?>
</div>