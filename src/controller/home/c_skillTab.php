<?php

/**
 * @var PdoPortfolio $pdo
 */

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

if (!empty($_GET['skillTab'])) {
    $skillTab = filter_input(INPUT_GET, 'skillTab', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $skillTab = 'prog';
}

$skillInfo = $pdo->getSkillsInfoFromTab($skillTab);
if (!is_array($skillInfo)) {
    header("HTTP/1.0 404 Not Found");
    exit();
} else {
    echo '<link rel="stylesheet" href="/css/skill.css">';
    Pager::renderPage(VIEW . '/home/v_skill.php', [
        'skillTabIcon' => $skillInfo[0]['tabIcon'],
        'skillTabName' => $skillInfo[0]['name'],
        'toolsUsed' => explode(';', $skillInfo[0]['logiciel']),
        'skills' => $skillInfo,
    ]);
}
