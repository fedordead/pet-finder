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

        <h2 class="heading heading--main h-spacing-base"><?php print_tag($pet->status, 'Lost:'); ?> <?php print_tag($pet->name, 'Catty McCatface'); ?></h2>

        <img class="h-spacing-base" src="http://placekitten.com/200/300" alt="Place Kitten" />

        <ul class="h-spacing-base">



                <li>Species: <?php print_tag($pet->species); ?></li>
                <li>Breed: <?php print_tag($pet->breed); ?></li>
                <li>Size: <?php print_tag($pet->size); ?></li>
                <li>Colour: <?php print_tag($pet->colour); ?></li>

                <?php if($pet->collar) { ?>
                    <li>Collar: <?php echo $pet->collar; ?></li>
                <?php } ?>
                <?php if($pet->chipped) { ?>
                    <li>Chipped: <?php echo $pet->chipped; ?></li>
                <?php } ?>

                <li>Last seen: <?php print_tag($pet->location); ?></li>
                <li>At: <?php print_tag($pet->time); ?></li>



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
