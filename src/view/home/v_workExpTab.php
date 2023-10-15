<?php

/**
 * @var bool $isNew
 * @var string $companyName
 * @var string $companyDuration
 * @var array $companyImage
 * @var string $companyJob
 * @var array $companyTask
 * @var bool $rapportMany
 */
?>

<div id="work-experience-wrapper" class="experience clearfix cardbox" data-aos="flip-up" data-aos-easing="ease-out-cubic">
    <div class="row justify-content-end">
        <div class="col-lg-2">
            <div class="lieu"><?= $companyName; ?>&nbsp;<?= $isNew ? '<span class="badge text-bg-info">New</span>' : null; ?>
            </div>
            <div class="date"><?= $companyDuration; ?></div>
        </div>
        <div class="col-lg-2">
            <img src="<?= $companyImage[0]; ?>" style="width: 100px;" class="card-img-top" alt="<?= $companyImage[1]; ?>">
        </div>
        <div class="col-lg-8">
            <div class="profession"><?= $companyJob; ?></div>
            <div class="details">
                <ul>
                    <?php foreach ($companyTask as $task) : ?>
                        <li><?= $task; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php if ($rapportMany) : ?>
                <button a="#" type="button" class="custom-btn btn-3"><span><i class="fa fa-duotone fa-scroll fa-beat fa-2xs "></i> Lire les rapports</span></button>
            <?php elseif ($rapportMany === false) : ?>
                <button a="#" type="button" class="custom-btn btn-3"><span><i class="fa fa-duotone fa-scroll fa-beat fa-2xs "></i> Lire le rapport</span></button>
            <?php else : ?>
                <button a="#" type="button" class="custom-btn btn-3" disable><span><i class="fa fa-duotone fa-scroll fa-beat fa-2xs "></i> Aucun rapport</span></button>
            <?php endif; ?>
        </div>
    </div>
</div>