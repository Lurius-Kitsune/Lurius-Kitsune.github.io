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
    <div class="row justify-content-end">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">VS CODE</h5>
                </div>
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