<?php

/**
 * @var array $projectItemList
 */

use Luriusfox\MyPackage\Tools\Pager;

?>
<div id="projectCarousel" class="carousel slide">
    <div class="carousel-indicators">
        <?php
        $i = 0;
        foreach ($projectItemList as $item) : ?>
            <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $item['carousel_item_id'] ?>"></button>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php
        $isFirstItem = true;
        foreach ($projectItemList as $item) {
            Pager::renderView(VIEW . '/realisation/v_carouselItem.php', [
                'isFirstItem' => $isFirstItem,
                'itemImageUrl' => $item['image_url'],
                'itemImageAlt' => $item['alt_text'],
                'itemDescription' => $item['text_content'],
                'ressourceUrl' => $item['ressource_url']
            ]);
            $isFirstItem = false;
        } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
