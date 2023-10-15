<?php

require_once __DIR__ . '/../vendor/autoload.php';
?>
<!doctype html>
<html lang="fr">
<style>
    .bordertop {
        border-top: 10px ridge var(--bs-info);
    }
</style>

<head>
    <?php
    require_once VIEW . '/v_head.html';
    echo $headerContent
    ?>
</head>

<body>
    <?php require_once VIEW . '/v_nav.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-10 nopadding img-1" id="content">
                <?php require(VIEW . '/v_owner.html'); ?>
                <?= $content; ?>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-lg-10 nopadding bordertop">
                <footer>
                    <?php require_once VIEW . '/v_defaultfooter.php'; ?>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>