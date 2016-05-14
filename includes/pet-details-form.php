<p class="h-spacing-tiny">Status:</p>

<div class="h-spacing-base">

<?php if ($page =='search') { ?>

    <p class="h-spacing-tiny">
        <input id="lost-found" type="radio" value="all" name="status" checked>
        <label for="lost-found">Lost &amp; Found</label>
    </p>

<?php } ?>

    <p class="h-spacing-tiny">
        <input id="lost" type="radio" value="lost" name="status">
        <label for="lost">Lost</label>
    </p>

    <p class="h-spacing-tiny">
        <input id="found" type="radio" value="found" name="status">
        <label for="found">Found</label>
    </p>
</div>

<p class="h-spacing-base">
    <label for="species">Species:</label>
    <span class="c-form-select">
        <select id="species" class="c-form-select__select" name="species">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
        </select>
        <svg class="c-form-select__icon">
            <use xlinkHref="#caret-icon" />
        </svg>
    </span>
</p>

<p class="h-spacing-base">
    <label for="breed">Breed:</label>
    <span class="c-form-select">
        <select id="breed" class="c-form-select__select" name="breed">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="alsation">Alsation</option>
            <option value="yorkshire-terrier">Yorkshire Terrier</option>
        </select>
    </span>
</p>

<p class="h-spacing-base">
    <label for="size">Size:</label>
    <span class="c-form-select">
        <select id="size" class="c-form-select__select" name="size">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
    </span>
</p>

<p class="h-spacing-base">
    <label for="colour">Colour:</label>
    <span class="c-form-select">
        <select id="colour" class="c-form-select__select" name="colour">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="black">Black</option>
            <option value="ginger">Ginger</option>
            <option value="grey">Grey</option>
        </select>
    </span>
</p>

<p class="h-spacing-tiny">Chipped:</p>

<div class="h-spacing-base">

<?php if ($page =='search') { ?>

    <p class="h-spacing-tiny">
        <input id="both-chipped" type="radio" value="true" name="is-chipped" checked>
        <label for="both-chipped">Show all</label>
    </p>

<?php } ?>

    <p class="h-spacing-tiny">
        <input id="chipped" type="radio" value="true" name="is-chipped">
        <label for="chipped">Yes</label>
    </p>

    <p class="h-spacing-tiny">
        <input id="not-chipped" type="radio" value="false" name="is-chipped">
        <label for="not-chipped">No</label>
    </p>
</div>

<p class="h-spacing-base">
    <label for="chip-number">Chip number:</label>
    <input type="text" id="chip-number" name="chip-number">
</p>

<p class="h-spacing-base">
    <label for="collar">Collar:</label>
    <span class="c-form-select">
        <select id="collar" class="c-form-select__select" name="collar">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="none">None</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
        </select>
    </span>
</p>

<p class="h-spacing-base">
    <label for="date">Date last seen:</label>
    <input type="date" id="date" name="date">
</p>

<p>
    <label for="location">Location last seen:</label>
    <span class="c-form-select">
        <select id="location" class="c-form-select__select" name=
        "location">

            <?php if ($page =='search') { ?>
                <option value="all">Show all</option>
            <?php } ?>

            <option value="walton">Walton-on-Thames</option>
            <option value="staines">Westside Staines Massive</option>
            <option value="oz">Australia</option>
        </select>
    </span>
</p>
