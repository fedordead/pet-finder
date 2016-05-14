<?php
    $page="search";
    include("includes/header.php");
?>

    <aside class="l-sidebar">

        <h2>Filters</h2>

<?php
    include("includes/pet-details-form.php");
?>

    </aside>
    
    <main class="l-main" role="main">
        
        <h2>Pets</h2>
        <?php 

            $posts = get_posts(); 
            var_dump($posts);

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
                        <button>I've found this pet!</button>
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
                        <button>That's my pet!</button>
                    </div>
                </div>
            </li>
        </ul>

    </main>

<?php
    include("includes/footer.php");
?>
