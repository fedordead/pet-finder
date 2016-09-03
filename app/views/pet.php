
<div class="l-container">

    <main role="main" class="l-main">

    <?php

    if($pet){
    ?>

        <h2 class="heading-headline h-spacing"><?php print_tag($pet['status'], 'Lost:'); ?> <?php print_tag($pet['name'], 'Catty McCatface'); ?></h2>

        <img class="h-spacing" src="http://placekitten.com/200/300" alt="Place Kitten" />

        <ul class="h-spacing">



                <li>Species: <?php print_tag($pet['species']); ?></li>
                <li>Breed: <?php print_tag($pet['breed']); ?></li>
                <li>Size: <?php print_tag($pet['size']); ?></li>
                <li>Colour: <?php print_tag($pet['colour']); ?></li>

                <?php if($pet['collar']) { ?>
                    <li>Collar: <?php echo $pet['collar']; ?></li>
                <?php } ?>
                <?php if($pet['chip_number']) { ?>
                    <li>Chipped: <?php echo $pet['chip_number']; ?></li>
                <?php } ?>

                <li>Last seen: <?php print_tag($pet['location']); ?></li>
                <li>At: <?php print_tag($pet['date_lost']); ?></li>



            </ul>

        <h3>Please contact:</h3>

        <address>
            <p>{{ David Berner }}</p>
            <p>{{ 07894 535 194 }}</p>
            <p>{{ davidajberner@gmail.com }}</p>
        </address>

        <?php } else { ?>

            <h2 class="heading-headline h-spacing">Awkward...</h2>

            <p>Seems we've lost this pet from our records.  Double lost :S</p>

        <?php } ?>
    </main>

</div>
