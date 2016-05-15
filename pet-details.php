<?php
    $page="pet-details";
    include("includes/header.php");
?>

<div class="l-container">

    <main role="main" class="l-main">

        <h2 class="heading heading--main h-spacing-base">{{ Lost }}: {{ Barbara }}</h2>

        <img class="h-spacing-base" src="http://placekitten.com/200/300" alt="Place Kitten" />

        <ul class="h-spacing-base">

                <?php
                    // get the posts
                    $pet = get_single_post();

                    if($pet){
                ?>

                <li>Species: <?php echo $pet->species; ?></li>
                <li>Breed: <?php echo $pet->breed; ?></li>
                <li>Size: <?php echo $pet->size; ?></li>
                <li>Colour: <?php echo $pet->colour; ?></li>
                <li>Collar: <?php echo $pet->collar; ?></li>
                <li>Chipped: <?php echo $pet->chipped; ?></li>
                <li>Last seen: <?php echo $pet->location; ?>, <?php echo $pet->time; ?></li>

                <?php } ?>

            </ul>

        <h3>Please contact:</h3>

        <address>
            <p>{{ David Berner }}</p>
            <p>{{ 07894 535 194 }}</p>
            <p>{{ davidajberner@gmail.com }}</p>
        </address>


    </main>

</div>

<?php
    include("includes/footer.php");
?>
