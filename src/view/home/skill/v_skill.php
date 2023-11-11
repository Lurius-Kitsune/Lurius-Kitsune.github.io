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
    <nav aria-label="Page navigation example" class="mb-3 d-flex justify-content-center">
        <ul class="pagination" id='skillTabMenu'>
            <?php
            foreach ($skillTabList as $key => $skillTabOfList) {
                $name = $skillTabOfList['name'];
                $id = $skillTabOfList['id'];
                echo "<li class='page-item'><button class='page-link skillTabSelect " . ($name === $skillTabName ? 'active' : '') . "' type='button' value='$id'>$name</button></li>";
            }
            ?>
        </ul>
    </nav>
    <?php require_once VIEW . '/home/skill/v_skillTabWrapper.php' ?>
</div>