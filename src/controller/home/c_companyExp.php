<?php

use Luriusfox\MyPackage\Model\PdoPortfolio;
use Luriusfox\MyPackage\Tools\Pager;

/**
 * @var PdoPortfolio $pdo
**/

?>

<div class="rubrique clearfix" id="home-company-content">

<?php
$table = $pdo->getAllCompanyInfo();

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