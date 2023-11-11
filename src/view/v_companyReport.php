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
            <img src="<?= $companyImage; ?>" class=" w-100 card-img-top" alt="Photo de l'entreprise <?= $companyName; ?>">
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
                <?php Pager::renderView(VIEW . '/utils/v_listBadge.php', [
                    'companySkill' => $companySkill
                ]); ?>
            </div>
        </div>
    </div>
    <hr />
    <div class="container-fluid row row-cols-7" style="margin-left: 0px;">
        <?php
        if (!$rapportMany) {
            Pager::renderView(VIEW . '/utils/v_iframePdfReader.php', [
                'fileName' => $companyName
            ]);
        } else {
            for ($i = 1; $i <= $companyNbReport; $i++) {
                echo "<div class='pr-1 pb-2 col-sm-2'>";
                echo "<button class='btn w-100 btn-danger reportButtonStage' type='button' id='report-$i' value='" . $companyName . "_S$i' >
                <i class='fa fa-solid fa-file-circle-check'></i> Semaine $i
            </button></div>";
            }
        }
        ?>
    </div>
    <div class="modal fade" id="rapportModal" tabindex="-1" aria-labelledby="rapportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rapportModalLabel">Certification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Le document de certification sera affiché ici -->
                    <iframe class="mt-2" src='/resources/pdf/<?= $companyName; ?>_S1.pdf' width='100%' style='height:50em' id="pdfReader"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>