<?php

/**
 * @var PdoPortfolio $pdo
 */

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

$page = VIEW . '/home/v_skill.php';
if (!empty($_GET['skillTab'])) {
    $skillTab = filter_input(INPUT_GET, 'skillTab', FILTER_SANITIZE_SPECIAL_CHARS);
    $page = VIEW . '/home/v_skillTabWrapper.php';
} else {
    $skillTab = 'prog';
}

$skillInfo = $pdo->getSkillsInfoFromTab($skillTab);

if (!is_array($skillInfo)) {
    header("HTTP/1.0 404 Not Found");
    exit();
} else {
    echo '<link rel="stylesheet" href="/css/skill.css">';
    Pager::renderPage($page, [
        'skillTab' => $skillInfo[0],
        'toolsUsed' => !is_null($skillInfo[0]['logiciel']) ? explode(';', $skillInfo[0]['logiciel']) : null,
        'skills' => $skillInfo,
        'skillTabList' => $pdo->getSkillsTabList(),
    ]);
}
