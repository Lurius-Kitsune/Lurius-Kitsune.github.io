<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
**/

$companyName = filter_input(INPUT_GET, 'company', FILTER_SANITIZE_SPECIAL_CHARS);
$company = $pdo->getCompanyInfo($companyName);

Pager::renderPage(VIEW . '/v_companyReport.php', [
    'companyName' => $company['companyName'],
    'companyLieu' => $company['lieu'],
    'companyDuration' => $company['duree'],
    'companyWorkType' => $company['workType'], // 'stage', 'alternance', 'CDI', 'CDD'
    'companyImage' => $company['imageLink'],
    'companyJob' => $company['jobPost'],
    'companyMainTask' => explode(';', $company['mainTask']),
    'companySubTask' => is_null($company['subTask']) ? null : explode(';', $company['subTask']),
    'companySkill' => explode(';', $company['skill']),
    'rapportMany' => $company['hasManyReport']
]);
