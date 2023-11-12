<?php

/**
 * @var string $projectTitle
 * @var array $projectBlocs
 * @var string $projectDuration
 * @var string $projectDescription
 * @var array $projectCardList
 * @var string $projectSubDescription
 * @var ?string $projectGithub
 * @var ?string $projectDemo
 */

?>
<div class="box-lg rounded bg-white">
    <h3 class="text-center underline">
        <?= $projectTitle; ?>
    </h3>
    <ul>
        <li>
            <span class="underline font-weight-bold">Bloc concernée :</span>
            <?php foreach ($projectBlocs as $bloc) : ?>
                <span class="font-italic badge bg-primary">B <?= $bloc; ?></span>
            <?php endforeach; ?>
        </li>
        <li>
            <span class="underline font-weight-bold">Durée :</span> <span class="font-italic"><?= $projectDuration ?></span>
        </li>
        <li>
            <span class="underline font-weight-bold">Description:</span>
            <p class="font-italic">
                <?= $projectDescription; ?>
            </p>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <?php foreach ($projectCardList as $card) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-sm border-red">
                        <img class="card-img-top" src="/images/Nolark/acceuil_nolark.png">
                        <div class="card-body">
                            <p class="card-text">
                                La page d'acceuil du site Nolark.
                            </p>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/images/Nolark/acceuil_nolark.png" target="_blank">Voir</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="font-italic">
            <?= $projectSubDescription; ?>
        </p>
        <?php if (!is_null($projectGithub)) : ?>
            <a href="<?= $projectGithub; ?>" target="_blank"><button class="btn btn-secondary" style="width: 135px"><span class="fa fa-brands fa-github "></span> Code source</button></a>
        <?php endif; ?>
        <?php if (!is_null($projectDemo)) : ?>
            <a href="<?= $projectDemo; ?>" target="_blank"><button class="btn btn-primary" style="width: 135px"><span class="fa fa-info-circle"></span> Voir la démo</button></a>
        <?php endif; ?>
    </div>
</div>