
<div class="l-side-by-side l-side-by-side--gutterless">

    <aside class="l-side-by-side__item">

        <div class="l-sidebar">

            <form>

<?php
    include("partials/pet-details-form.php");
?>

            </form>

        </div>
    </aside>

    <div class="l-side-by-side__item">

        <main class="l-main" role="main">

            <h2 class="heading heading--main h-spacing">Pets</h2>

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
    <!-- .l-side-by-side__item -->
</div>
<!-- .l-side-by-side -->
