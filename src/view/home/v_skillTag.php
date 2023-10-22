<?php

/**
 * @var string $skillName
 * @var int $skillLevel
 */

?>

<div class="col-sm-6">
    <div class="card pb-3 mb-1">
        <div class="skill-img">
            <img src="/images/prog/<?= $skillName === 'C#' ? 'Csharp' : $skillName ?>.png" class="card-img-top" alt="<?= $skillName ?>">
        </div>
        <div class="card-body" style="padding: 0px !important;">
            <h5 class="card-title text-center"><?= $skillName ?></h5>
        </div>
        <div class="text-center card-text skill-level show-<?= $skillLevel ?>">
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
        </div>
    </div>
</div>