<main class="l-main" role="main">

    <h2 class="heading heading--main h-spacing">Reports</h2>

    <ul class="l-grid">

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
    </ul>

    <h2 class="heading heading--main h-spacing">Account Information</h2>



</main>

