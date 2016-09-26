
<a class="c-card" href="/pet/<?php echo $post['id']; ?>">

    <div class="c-card__header">
        <h3 class="heading-headline"><?php print_tag($post['name'], 'Pet Name'); ?></h3>
    </div>

    <div class="c-card__body">
        <ul>
            <li>Species: <?php print_tag($post['species_id']); ?></li>
            <li>Breed: <?php print_tag($post['breed_id']); ?></li>
            <li>Size: <?php print_tag($post['size_id']); ?></li>
            <li>Colour: <?php print_tag($post['colour_id']); ?></li>

            <?php if($post['collar_id']) { ?>
                <li>Collar: <?php echo $post['collar_id']; ?></li>
            <?php } ?>

            <?php if($post['chip_number']) { ?>
                <li>Chipped: <?php echo $post['chip_number']; ?></li>
            <?php } ?>

            <li>Last seen: <?php print_tag($post['location_id']); ?></li>
            <li>At: <?php print_tag($post['date_lost']); ?></li>
        </ul>
    </div>
    <?php if ($page == 'user-posts') { ?>
    <div class="c-card__footer">
        <button class="c-button">
            Delete Post
        </button>
        <button class="c-button">
            Mark as resolved
        </button>
        <a class="c-button" href="/edit-report">
            Edit details
        </a>
    </div>
    <?php } ?>
</a>

