<?php

use Luriusfox\MyPackage\Tools\Pager;

$table = [];

// Evoliz company
$table['Evoliz'] = [
    'isNew' => true, // true = 'Nouvelle entreprise', false = 'Ancienne entreprise
    'duration' => '2023 (8 sem.)',
    'image' => ['https://lamacompta.co/wp-content/uploads/2021/12/Evoliz-logo.png', 'Logo de l\'entreprise Evoliz'],
    'job' => 'Developpeur Web',
    'task' => [
        'Ajout et amélioration de fonctionnalité de la solution Evoliz.',
        'Maintenance et correction de la solution Evoliz.',
        'Découverte du framework PHP Laravel et des methodes de développement avec pomodoro.'
    ],
    'rapportMany' => true
];

// Linexos company
$table['Linexos'] = [
    'isNew' => false,
    'duration' => '2021 (6 sem.)',
    'image' => ['https://ccibusiness.fr/sites/default/files/styles/photo_company_220_220/public/2021-07/Stickers.png?itok=VL_KVMO6', 'Logo de l\'entreprise Linexos'],
    'job' => 'Developpement Python',
    'task' => [
        'Développement d’une API ainsi qu’une REST API en Python.',
        'Travaille sur un début de projet d’un client de l’entreprise.',
        'Découverte de python en autodidacte.'
    ],
    'rapportMany' => null
];

// Progial company
$table['Progial'] = [
    'isNew' => false,
    'duration' => '2021 (6 sem.)',
    'image' => ['https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/7e/8d/47/7e8d4748-511c-fbbf-8984-d53c362c97b1/source/512x512bb.jpg', 'Logo de l\'entreprise Progial'],
    'job' => 'Administrateur réseaux',
    'task' => [
        'Supervision & Maintenance de serveur à distance.',
        'Installation d\'un cluster DHCP.',
        'Déploiment de suite informatique à travers l\'infratruture de l\'entreprise.'
    ],
    'rapportMany' => false
];

foreach ($table as $Tablekey => $value) {
    Pager::renderPage(VIEW . '/home/v_workExpTab.php', [
        'isNew' => $value['isNew'],
        'companyName' => $Tablekey,
        'companyDuration' => $value['duration'],
        'companyImage' => $value['image'],
        'companyJob' => $value['job'],
        'companyTask' => $value['task'],
        'rapportMany' => $value['rapportMany']
    ]);
}
?>
</div>