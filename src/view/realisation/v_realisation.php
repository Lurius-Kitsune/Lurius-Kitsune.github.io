<?php

/**
 * @var string $projectTitle
 * @var array $projectBlocs
 * @var string $projectDuration
 * @var string $projectDescription
 * @var array $projectItemList
 * @var ?array $projectSubDescription
 * @var ?string $projectGithub
 * @var ?string $projectDemo
 */

use Luriusfox\MyPackage\Tools\Pager;

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
        <?php if (!empty($projectItemList)) {
            Pager::renderView(VIEW . '/realisation/v_carousel.php', [
                'projectItemList' => $projectItemList
            ]);
        }
        ?>
        <?php foreach ($projectSubDescription as $subDescription) : ?>
            <p class="font-italic mt-2">
                <?= $subDescription['text_content']; ?>
            </p>
        <?php endforeach; ?>
        <?php if (!is_null($projectGithub)) : ?>
            <a href="<?= $projectGithub; ?>" target="_blank"><button class="btn btn-secondary" style="width: 135px"><span class="fa fa-brands fa-github "></span> Code source</button></a>
        <?php endif; ?>
        <?php if (!is_null($projectDemo)) : ?>
            <a href="<?= $projectDemo; ?>" target="_blank"><button class="btn btn-primary" style="width: 135px"><span class="fa fa-info-circle"></span> Voir la démo</button></a>
        <?php endif; ?>
    </div>
</div>
<script>
    document.addEventListener('load', function() {
        var myCarousel = document.querySelector('#projectCarousel')
        if (myCarousel) {
            var carousel = new bootstrap.Carousel(myCarousel)
        }
    });
</script>