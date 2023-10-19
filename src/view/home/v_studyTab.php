<?php

/**
 * @var string $studyId
 * @var string $studyName
 * @var string $studyState
 * @var string $studyYearsPeriod
 * @var string[] $studyDescription
 * @var string $linkWebsite
 */
?>
<div id="home-study-content">
    <div class="cardbox cardbox-hoverable" data-aos="fade-up" data-aos-easing="ease-out-cubic">
        <div class="row" id="<?= $studyId; ?>">
            <i class="col-lg-2 fa fa-duotone fa-school" style="font-size: 100px;"></i>
            <div class="col-lg">
                <h3><?= $studyName; ?></h3>
                <h5><?= $studyYearsPeriod; ?></h5>
                <h6><i class="fa fa-duotone fa-graduation-cap"></i> <?= $studyState; ?></h6>
            </div>
        </div>
        <?php if ($studyDescription !== null) {
            echo "<hr>";
        }
        ?>
        <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <?php
                if (is_array($studyDescription) && !empty($studyDescription)) {
                    foreach ($studyDescription as $description) {
                        echo "<li>$description</li>";
                    }
                }

                if ($linkWebsite !== null) {
                    echo "<a href='$linkWebsite' target='_blank'>
                        <button type='button' class='custom-btn btn-3'>
                            <span>
                                <i class='fa fa-duotone fa-globe '></i> 
                                Site de l'école
                            </span>
                        </button>
                    </a>";
                }
                ?>
            </div>
        </div>
    </div>
</div>