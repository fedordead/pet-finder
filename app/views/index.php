
<div class="l-grid l-grid--gutterless">

    <aside class="l-grid__item">

        <div class="l-sidebar">

            <form name="report_form">

<?php
    include("partials/pet-details-form.php");
?>

            </form>

        </div>
    </aside>

    <div class="l-grid__item">

        <main class="l-main" role="main">

            <h2 class="heading-headline h-spacing">Pets</h2>

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

        </main>

    </div>
    <!-- .l-grid__item -->
</div>
<!-- .l-grid -->
