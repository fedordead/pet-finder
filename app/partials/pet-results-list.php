<?php 
        require_once $_SERVER['DOCUMENT_ROOT'].'/core/functions.php';
        // Load class
        __autoload('Posts');
        // New Posts instance
        $Posts = new Posts;
        // Get all posts
        $posts = $Posts->get_all();
?>
<div class="l-grid__item">
    <main class="l-main" role="main">
        <h2 class="heading-headline h-spacing">Pets</h2>
        <ul class="l-grid">
            <?php

                if($posts){

                    foreach ($posts as $post) {
            ?>
                <li class="l-grid__item l-grid__item--4-col">
                    <?php include($_SERVER['DOCUMENT_ROOT']."/partials/card.php"); ?>
                </li>
                <?php
                    }
                }
            ?>
        </ul>
    </main>
</div>
