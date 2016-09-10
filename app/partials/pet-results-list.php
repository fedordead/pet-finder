<?php

    if($posts){

        foreach ($posts as $key => $post) {
?>
    <li class="l-grid__item l-grid__item--4-col">

    <?php include("partials/card.php"); ?>

    </li>

<?php
        }
    }
?>
