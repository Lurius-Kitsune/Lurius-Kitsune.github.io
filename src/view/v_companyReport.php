<?php

/**
 * @var string $companyName
 * @var string $companyLieu
 * @var string $companyDuration
 * @var string $companyWorkType
 * @var string $companyImage
 * @var string $companyJob
 * @var array $companyMainTask
 * @var ?array $companySubTask
 * @var array $companySkill
 * @var bool $rapportMany
 */

use Luriusfox\MyPackage\Tools\Pager;

?>

<div id="work-experience-wrapper" class="experience clearfix ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $companyName; ?></li>
        </ol>
    </nav>
    <hr />
    <div class="row justify-content-end">
        <div class="col-sm-3 col-lg-2">
            <img src="<?= $companyImage; ?>" style="width: 100%;" class="card-img-top" alt="Photo de l'entreprise <?= $companyName; ?>">
        </div>
        <div class="col-sm-9 col-lg-2">
            <div class="lieu"><?= $companyLieu; ?></div>
            <div class="date"><?= $companyDuration; ?></div>
            <div><span class="badge text-bg-success mb-1"><?= $companyWorkType; ?></span></div>
        </div>
        <hr class="d-lg-none d-block">
        </hr>
        <div class="col-lg-8">
            <div class="profession"><?= $companyJob; ?></div>
            <div class="details">
                <p class="mb-0">Tâches principales :</p>
                <ul>
                    <?php foreach ($companyMainTask as $task) : ?>
                        <li><?= $task; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php if (!is_null($companySubTask)) : ?>
                <div class="details">
                    <p class="mb-0">Extras :</p>
                    <ul>
                        <?php foreach ($companySubTask as $task) : ?>
                            <li><?= $task; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="details">
                <p class="mb-0">Compétences travailler :</p>
                <?php Pager::renderPage(VIEW . '/utils/v_listBadge.php', [
                    'companySkill' => $companySkill
                ]); ?>
            </div>
        </div>
    </div>
    <hr />
    <?php
    if (!$rapportMany) {
        echo "<iframe src='/resources/pdf/$companyName.pdf' width='100%' style='height:75em'></iframe>";
    }
    ?>
</div>