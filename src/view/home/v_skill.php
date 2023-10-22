<?php

/**
 * @var array $toolsUsed
 * @var string $skillTabIcon
 * @var string $skillTabName
 * @var array $skills
 */

use Luriusfox\MyPackage\Tools\Pager;

?>
<div id="home-skill-content" class="rubrique clearfix">
    <div class="row align-items-center justify-content-end">
        <div class="col-sm-6">
            <div class="container-fluid row" style="margin-right: 0px !important; margin-left: 0px !important;">
            <h3 class="textTab"> Mes outils / logiciel utilisé⚙️ </h3>
                <?php
                foreach ($toolsUsed as $logicielName) {
                    Pager::renderPage(VIEW . '/home/v_logicielUsedCard.php', [
                        'logicielName' => $logicielName,
                    ]);
                }
                ?>
            </div>
        </div>
        <div class="col-sm-6">
            <?php
            Pager::renderPage(VIEW . '/home/v_skillTab.php', [
                'skillTabIcon' => $skillTabIcon,
                'skillTabName' => $skillTabName,
                'skills' => $skills,
            ]);
            ?>
        </div>
    </div>
</div>