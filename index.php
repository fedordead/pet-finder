<?php
    $page="search";
    include("includes/header.php");
?>

<div class="l-side-by-side">


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

    <main class="l-side-by-side__item" role="main">

        <h2>Pets</h2>
        <?php 
            // get the posts
            $posts = get_posts(); 
                if($posts){
                    foreach ($posts as $post){
                    echo $post->breed;
                }
            }  
        ?>

        <ul>
            <li class="h-spacing-base">
                <div class="c-card">
                    <div class="c-card__header">
                        <h3>Tom the Cat</h3>
                    </div>
                    <div class="c-card__body">
                        <p>Photo</p>
                        <p>LOST!</p>
                        <p>Info</p>
                        <a href="/">I've found this pet!</a>
                    </div>
                </div>
            </li>
            <li class="h-spacing-base">
                <div class="c-card">
                    <div class="c-card__header">
                        <h3>Jerry the Mouse</h3>
                    </div>
                    <div class="c-card__body">
                        <p>Photo</p>
                        <p>FOUND!</p>
                        <p>Info</p>
                        <a href="/">That's my pet!</a>
                    </div>
                </div>
            </li>
        </ul>

    </main>
</div>
<?php
    include("includes/footer.php");
?>
