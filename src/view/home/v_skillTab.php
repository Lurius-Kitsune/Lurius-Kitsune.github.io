<?php

/**
 * @var string $skillTabIcon
 * @var string $skillTabName
 * @var array $skills
 */

use Luriusfox\MyPackage\Tools\Pager;

?>

<div class="cardbox competences">
    <h3 class="textTab">
        <i class="fa fa-duotone fa-<?= $skillTabIcon; ?>"></i> <?= $skillTabName; ?>
    </h3>
    <div class="container-fluid row" style="margin-right: 0px !important; margin-left: 0px !important;">
        <?php
        foreach ($skills as $skill) {
            Pager::renderPage(VIEW . '/home/v_skillTag.php', [
                'skillName' => $skill['skillName'],
                'skillLevel' => $skill['skillLevel']
            ]);
        }
        ?>
    </div>
</div>