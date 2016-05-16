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

                <li>Species: <?php if($pet->species) { echo $pet->species; }  else echo '&mdash;' ?></li>
                <li>Breed: <?php if($pet->breed)   { echo $pet->breed; }  else echo '&mdash;' ?></li>
                <li>Size: <?php if($pet->size)    { echo $pet->size; }  else echo '&mdash;' ?></li>
                <li>Colour: <?php if($pet->colour) { echo $pet->colour; }  else echo '&mdash;' ?></li>

                <?php if($pet->collar) { ?>
                    <li>Collar: <?php echo $pet->collar; ?></li>
                <?php } ?>

                <?php if($pet->chipped) { ?>
                    <li>Chipped: <?php echo $pet->chipped; ?></li>
                <?php } ?>

                <li>Last seen: <?php if($pet->location) { echo $pet->location; }  else echo '&mdash;' ?></li>
                <li>At: <?php if($pet->time) { echo $pet->time; }  else echo '&mdash;' ?></li>

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
