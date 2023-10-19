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
?>

<div id="work-experience-wrapper" class="experience clearfix ">
    <div class="row justify-content-end">
        <div class="col-lg-2">
            <img src="<?= $companyImage; ?>" style="width: 100px;" class="card-img-top" alt="Photo de l'entreprise <?= $companyName; ?>">
        </div>
        <div class="col-lg-2">
            <div class="lieu"><?= $companyLieu; ?></div>
            <div class="date"><?= $companyDuration; ?></div>
            <div><span class="badge text-bg-success"><?= $companyWorkType; ?></span></div>
        </div>
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
                <?php foreach ($companySkill as $skill) : ?>
                    <span class="badge text-bg-info"><?= $skill; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <hr />
</div>