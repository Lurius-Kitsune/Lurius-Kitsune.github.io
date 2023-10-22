<?php

/**
 * @var array $toolsUsed
 * @var array $skillTab
 * @var array $skills
 * @var array $skillTabList
 */

use Luriusfox\MyPackage\Tools\Pager;

$skillTabIcon = $skillTab['tabIcon'];
$skillTabName = $skillTab['name'];
$skillTabId = $skillTab['id'];

?>
<script src="/js/skill.js"></script>
<div id="home-skill-content" class="rubrique clearfix">
    <?php require_once VIEW . '/home/v_skillTabWrapper.php' ?>
    <nav aria-label="Page navigation example" class="mt-5 d-flex justify-content-center">
        <ul class="pagination" id='skillTabMenu'>
            <?php
            foreach ($skillTabList as $key => $skillTab) {
                $name = $skillTab['name'];
                $id = $skillTab['id'];
                echo "<li class='page-item'><button class='page-link skillTabSelect " . ($name === $skillTabName ? 'active' : '') . "' type='button' value='$id'>$name</button></li>";
            }
            ?>
        </ul>
    </nav>
</div>