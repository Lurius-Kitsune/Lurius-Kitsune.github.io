<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
 **/


if (!empty($_POST)) {
    if (isset($_POST['fileName'])) {
        $postfileName = filter_input(INPUT_POST, 'fileName', FILTER_SANITIZE_SPECIAL_CHARS);
        if (file_exists(PUBLIC_PATH . "/resources/pdf/$postfileName.pdf")) {
            Pager::renderPage(VIEW . '/utils/v_iframePdfReader.php', [
                'fileName' => $postfileName,
            ]);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "<div class='alert alert-danger mt-2' id='pdfReader' role='alert'>
                <i class='fa fa-solid fa-triangle-exclamation'></i> Ce rapport est introuvable, veuillez contactez l'administrateur du site
            </div>";
        }
    } else {
        header("HTTP/1.0 403 Not Found");
    }
    exit();
} else {
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
        'rapportMany' => $company['hasManyReport'],
        'companyNbReport' => $company['nbReport'],
    ]);
}
