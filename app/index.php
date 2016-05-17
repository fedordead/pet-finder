<?php
    $page="search";
    include("partials/header.php");
?>

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

            <h2 class="heading heading--main h-spacing-base">Pets</h2>

            <ul class="l-grid">

            <?php
                // get the posts
                $posts = get_posts();

                if($posts){

                    foreach ($posts as $key => $post){
            ?>
                <li class="l-grid__item l-grid__item--4-col">

                    <a class="c-card" href="/pet-details.php?pet=<?php echo substr($key, 1); ?>">

                        <div class="c-card__header">
                            <h3 class="heading heading--main"><?php if($post->name) { echo $post->name; } else { echo 'Pet Name'; } ?></h3>
                        </div>

                        <div class="c-card__body">
                            <ul>
                                <li>Species: <?php if($post->species) { echo $post->species; } else { echo '&mdash;'; } ?></li>
                                <li>Breed: <?php if($post->breed)   { echo $post->breed; } else { echo '&mdash;'; } ?></li>
                                <li>Size: <?php if($post->size)    { echo $post->size; } else { echo '&mdash;'; } ?></li>
                                <li>Colour: <?php if($post->colour) { echo $post->colour; } else { echo '&mdash;'; } ?></li>

                                <?php if($post->collar) { ?>
                                    <li>Collar: <?php echo $post->collar; ?></li>
                                <?php } ?>

                                <?php if($post->chip_number) { ?>
                                    <li>Chipped: <?php echo $post->chip_number; ?></li>
                                <?php } ?>

                                <li>Last seen: <?php if($post->location) { echo $post->location; } else { echo '&mdash;'; } ?></li>
                                <li>At: <?php if($post->time) { echo $post->time; } else { echo '&mdash;'; } ?></li>
                            </ul>
                        </div>
                    </a>
                    <!-- .c-card -->

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

<?php
    include("partials/footer.php");
?>
