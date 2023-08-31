<!doctype html>
<html lang="fr">

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
            <div class="col-lg-10 nopadding">
                <footer>
                    <?php require_once __DIR__ . '/../view/Defaultfooter.php'; ?>
                </footer> 
            </div>
        </div>
    </div>
    
</body>

</html>