<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
 */

if (empty($_GET['projectId'])) {
    header("HTTP/1.0 404 NotFound");
    exit();
}

$projectId = filter_input(INPUT_GET, 'projectId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$headerContent = '<link href="/css/realisations.css" rel="stylesheet">';

$projectInfo = $pdo->getProjectInfo($projectId);

if ($projectInfo === false) {
    header("HTTP/1.0 404 NotFound");
    exit();
}

$content = Pager::extractFile(VIEW . '/realisation/v_realisation.php', null, [
    'projectTitle' => $projectInfo['name'],
    'projectBlocs' => explode(';', $projectInfo['listBloc']),
    'projectDuration' => $projectInfo['duration'],
    'projectDescription' => $projectInfo['description'],
    'projectItemList' =>  $pdo->getCarousselProjectInfo($projectId),
    'projectSubDescription' => $pdo->getProjectSubDescription($projectId) ?? '',
    'projectGithub' => $projectInfo['repositoryLink'],
    'projectDemo' => $projectInfo['demoLink']
]);

Pager::renderView(VIEW . '/v_default.php', [
    'content' => $content,
    'headerContent' => $headerContent
]);
