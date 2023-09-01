<!doctype html>
<html lang="fr">
<style>
    .bordertop {
        border-top: 10px ridge var(--bs-info);
    }
</style>
<head>
    <?php
        require_once __DIR__ . '/../view/head.html';
        echo $headerContent
    ?>
</head>

<body>
    <?php require_once __DIR__ . '/../view/nav.php'; ?>
    <div class="container-fluid">        
        <div class="row justify-content-end"> 
            <div class="col-lg-10 nopadding">
                <?= $content; ?>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-lg-10 nopadding bordertop">
                <footer>
                    <?php require_once __DIR__ . '/../view/Defaultfooter.php'; ?>
                </footer> 
            </div>
        </div>
    </div>
    
</body>

</html>