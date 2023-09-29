<?php

$skillJauge = '';
for ($i = 0; $i < 10; $i++) {
    $skillJauge .= '<span>&nbsp;</span>';
}
?>
<link rel="stylesheet" href="/css/skill.css">
<div id="home-skill-content" class="rubrique clearfix">
    <div class="row justify-content-end">
            <div class="col-lg-6 rubrique clearfix">
                <div id="langues" class="cardbox">
                    <h3 class="underline">
                        <span class="fa fa-flag"></span> Langue
                    </h3>
                    <div class="container">
                        <div class="langue">Français</div>
                        <div class="niveau">
                            <span class="badge bg-dark">A1</span>
                            <span class="badge bg-dark">A2</span>
                            <span class="badge bg-dark">B1</span>
                            <span class="badge bg-dark">B2</span>
                            <span class="badge bg-primary">C1</span>
                            <span class="badge bg-dark">C2</span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="langue">Anglais</div>
                        <div class="niveau">
                            <span class="badge bg-dark">A1</span>
                            <span class="badge bg-dark">A2</span>
                            <span class="badge bg-dark">B1</span>
                            <span class="badge bg-primary">B2</span>
                            <span class="badge bg-dark">C1</span>
                            <span class="badge bg-dark">C2</span>
                        </div>
                    </div>
                </div>
                <div class="cardbox competences">
                    <h3 class="underline">
                        <i class="fa fa-duotone fa-swatchbook"></i> ???
                    </h3>
                    <div class="container">
                        <div class="libelle">Intégration web</div>
                        <div class="skill-level show-7">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container">
                        <div class="libelle">Dév. web</div>
                        <div class="skill-level show-7">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container">
                        <div class="libelle">Administrateur réseaux</div>
                        <div class="skill-level show-5">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 rubrique clearfix">
                <div class="cardbox competences">
                    <h3 class="underline">
                        <i class="fa fa-duotone fa-swatchbook"></i> Artistique
                    </h3>
                    <div class="container">
                        <div class="libelle">Texurisation 3D</div>
                        <div class="skill-level show-6">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container">
                        <div class="libelle">Edition 3D</div>
                        <div class="skill-level show-1">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                </div>
                <div id="langue_prog" class="cardbox competences">
                    <h3 class="text-primary underline">
                        <span class="fa fa-duotone fa-computer"></span> Programmation
                    </h3>
                    <div class="container">
                        <div class="libelle">Orienté Objet</div>
                        <div class="skill-level show-8">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container pl-5">
                        <div class="libelle">Python</div>
                        <div class="skill-level show-7">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container pl-5">
                        <div class="libelle">Java</div>
                        <div class="skill-level show-5">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container pl-5">
                        <div class="libelle">VBA</div>
                        <div class="skill-level show-5">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container pl-5">
                        <div class="libelle">C++</div>
                        <div class="skill-level show-1">
                            <?= $skillJauge ?>
                        </div>
                    </div>
                    <div class="container pl-5">
                        <div class="libelle">C#</div>
                        <div class="skill-level show-6">
                            <?= $skillJauge ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>