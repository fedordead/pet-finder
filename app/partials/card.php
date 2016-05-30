
<a class="c-card" href="/pet/<?php echo substr($key, 1); ?>">

    <div class="c-card__header">
        <h3 class="heading-headline"><?php print_tag($post->name, 'Pet Name'); ?></h3>
    </div>

    <div class="c-card__body">
        <ul>
            <li>Species: <?php print_tag($post->species); ?></li>
            <li>Breed: <?php print_tag($post->breed); ?></li>
            <li>Size: <?php print_tag($post->size); ?></li>
            <li>Colour: <?php print_tag($post->colour); ?></li>

            <?php if($post->collar) { ?>
                <li>Collar: <?php echo $post->collar; ?></li>
            <?php } ?>

            <?php if($post->chip_number) { ?>
                <li>Chipped: <?php echo $post->chip_number; ?></li>
            <?php } ?>

            <li>Last seen: <?php print_tag($post->location); ?></li>
            <li>At: <?php print_tag(date('m/d/Y h:m', $post->time)); ?></li>
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

