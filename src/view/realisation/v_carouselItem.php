<?php

/**
 * @var bool $isFirstItem
 * @var string $itemImageUrl
 * @var string $itemImageAlt
 * @var string $itemDescription
 * @var ?string $itemButton
 */

?>

<style>
    .carousel-item::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* This will make the height 1/4 of the image */
        background-color: rgba(0, 0, 0, 0.5);
        /* Change the color and opacity as needed */
        z-index: 1;
        /* This will place the background behind the text */
    }

    .carousel-caption {
        z-index: 2;
        /* This will place the text in front of the background */
    }
</style>
<div class="carousel-item <?= $isFirstItem ? 'active' : ''; ?>">
    <img src="<?= $itemImageUrl; ?>" class="d-block w-100" alt="<?= $itemImageAlt; ?>">
    <div class="carousel-caption d-block">
        <h5 class="d-none d-md-block"><?= $itemDescription; ?></h5>
        <p class="d-block d-md-none"><?= $itemDescription; ?></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $itemButton; ?>">
            Voir
    </div>
</div>