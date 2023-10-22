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
 * @var int $companyNbReport
 */

use Luriusfox\MyPackage\Tools\Pager;

?>
<script src="/js/companyReport.js"></script>
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
    <div class="container-fluid row">
        <?php
        if (!$rapportMany) {
            Pager::renderPage(VIEW . '/utils/v_iframePdfReader.php', [
                'fileName' => $companyName
            ]);
        } else {
            for ($i = 1; $i <= $companyNbReport; $i++) {
                echo "<button class='col-sm-2 btn btn-danger me-1 mb-2 reportButtonStage' type='button' id='report-$i' value='" . $companyName . "_S$i'>
                <i class='fa fa-solid fa-file-circle-check'></i> Semaine $i
            </button>";
            }
        }
        ?>
    </div>
    <div id="companyReport-reader-wrapper">
    </div>
</div>