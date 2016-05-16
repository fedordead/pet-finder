<?php
    $page="pet-details";
    include("includes/header.php");
?>

<div class="l-container">

    <main role="main" class="l-main">

    <?php
    // get the posts
    $pet = get_single_post();

    if($pet){

    ?>

        <h2 class="heading heading--main h-spacing-base"><?php if($pet->status) { echo $pet->status; } else { echo 'Lost:'; } ?> <?php if($pet->name) { echo $pet->name; } else { echo 'Catty McCatFace'; } ?></h2>

        <img class="h-spacing-base" src="http://placekitten.com/200/300" alt="Place Kitten" />

        <ul class="h-spacing-base">



                <li>Species: <?php if($pet->species) { echo $pet->species; } else { echo '&mdash;'; } ?></li>
                <li>Breed: <?php if($pet->breed)   { echo $pet->breed; } else { echo '&mdash;'; } ?></li>
                <li>Size: <?php if($pet->size)    { echo $pet->size; } else { echo '&mdash;'; } ?></li>
                <li>Colour: <?php if($pet->colour) { echo $pet->colour; } else { echo '&mdash;'; } ?></li>

                <?php if($pet->collar) { ?>
                    <li>Collar: <?php echo $pet->collar; ?></li>
                <?php } ?>

                <?php if($pet->chipped) { ?>
                    <li>Chipped: <?php echo $pet->chipped; ?></li>
                <?php } ?>

                <li>Last seen: <?php if($pet->location) { echo $pet->location; } else { echo '&mdash;'; } ?></li>
                <li>At: <?php if($pet->time) { echo $pet->time; } else { echo '&mdash;'; } ?></li>



            </ul>

        <h3>Please contact:</h3>

        <address>
            <p>{{ David Berner }}</p>
            <p>{{ 07894 535 194 }}</p>
            <p>{{ davidajberner@gmail.com }}</p>
        </address>

        <?php } else { ?>

            <h2 class="heading heading--main h-spacing-base">Awkward...</h2>

            <p>Seems we've lost this pet from our records.  Double lost :S</p>

        <?php } ?>
    </main>

</div>

<?php
    include("includes/footer.php");
?>
