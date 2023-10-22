<?php

/**
 * @var array $toolsUsed
 * @var array $skillTab
 * @var array $skills
 * @var array $skillTabList
 */

use Luriusfox\MyPackage\Tools\Pager;

$skillTabIcon = $skillTab['tabIcon'];
$skillTabName = $skillTab['name'];
$skillTabId = $skillTab['id'];

?>

<div class="row align-items-center justify-content-end" id="skillTab-wrapper">
    <div class="col-sm-6">
        <div class="container-fluid row justify-content-center" style="margin-right: 0px !important; margin-left: 0px !important;">
            <h3 class="textTab"> Mes outils / logiciel utilisé⚙️ </h3>
            <?php
            if (!is_null($toolsUsed)) {
                foreach ($toolsUsed as $logicielName) {
                    require VIEW . '/home/v_logicielUsedCard.php';
                }
            } else {
                echo '<div class="alert alert-info" role="alert">
                        Aucun outils / logiciel utilisé pour cette catégorie !
                    </div>';
            }
            ?>
        </div>
    </div>
    <div class="col-sm-6">
        <?php
        require_once VIEW . '/home/v_skillTab.php';
        ?>
    </div>
</div>