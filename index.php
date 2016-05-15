<?php
    $page="search";
    include("includes/header.php");
?>

<div class="l-side-by-side l-side-by-side--gutterless">


    <aside class="l-side-by-side__item">

        <div class="l-sidebar">

            <h2 class="heading heading--main h-spacing-base">Filters</h2>

                <form>

<?php
    include("includes/pet-details-form.php");
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
                            <h3 class="heading heading--main">Pet Name <?php echo $post->name; ?></h3>
                        </div>

                        <div class="c-card__body">
                            <ul>
                                <li>Species: <?php echo $post->species; ?></li>
                                <li>Breed: <?php echo $post->breed; ?></li>
                                <li>Size: <?php echo $post->size; ?></li>
                                <li>Colour: <?php echo $post->colour; ?></li>
                                <li>Collar: <?php echo $post->collar; ?></li>
                                <li>Location: <?php echo $post->location; ?></li>
                            </ul>
                        </div>
                    </a>
                    <!-- .c-card -->

                </li>

            <?php   }
                }
            ?>
            </ul>

        </main>

    </div>
    <!-- .l-side-by-side__item -->
</div>
<!-- .l-side-by-side -->

<?php
    include("includes/footer.php");
?>
