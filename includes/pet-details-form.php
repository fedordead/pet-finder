<form action="app/new-lost-pet.php" method="POST">
<p class="h-spacing-tiny">Status:</p>

<div class="c-radio-switch-container h-spacing-base">

<?php if ($page =='search') { ?>

    <p class="c-radio-switch">
        <input id="lost-found" type="radio" value="all" name="status" class="c-radio-switch__input" checked>
        <label for="lost-found" class="c-radio-switch__label">All</label>
    </p>

<?php } ?>

    <p class="c-radio-switch">
        <input id="lost" type="radio" value="lost" name="status" class="c-radio-switch__input">
        <label for="lost" class="c-radio-switch__label">Lost</label>
    </p>

    <p class="c-radio-switch">
        <input id="found" type="radio" value="found" name="status" class="c-radio-switch__input">
        <label for="found" class="c-radio-switch__label">Found</label>
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
            <use xlink:href="#caret-icon" />
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
        <svg class="c-form-select__icon">
            <use xlink:href="#caret-icon" />
        </svg>
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
        <svg class="c-form-select__icon">
            <use xlink:href="#caret-icon" />
        </svg>
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
        <svg class="c-form-select__icon">
            <use xlink:href="#caret-icon" />
        </svg>
    </span>
</p>

<p class="h-spacing-tiny">Chipped:</p>

<div class="c-radio-switch-container h-spacing-base">

<?php if ($page =='search') { ?>

    <p class="c-radio-switch">
        <input id="both-chipped" type="radio" value="all" name="is-chipped" class="c-radio-switch__input" checked>
        <label for="both-chipped" class="c-radio-switch__label">All</label>
    </p>

<?php } ?>

    <p class="c-radio-switch">
        <input id="chipped" type="radio" value="all" name="is-chipped" class="c-radio-switch__input">
        <label for="chipped" class="c-radio-switch__label">Yes</label>
    </p>

    <p class="c-radio-switch">
        <input id="not-chipped" type="radio" value="all" name="is-chipped" class="c-radio-switch__input">
        <label for="not-chipped" class="c-radio-switch__label">No</label>
    </p>
</div>

<p class="h-spacing-base">
    <label for="chip-number">Chip number:</label>
    <input type="text" id="chip-number" name="chip-number" class="c-textual-input">
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
        <svg class="c-form-select__icon">
            <use xlink:href="#caret-icon" />
        </svg>
    </span>
</p>

<p class="h-spacing-base">
    <label for="date">Date last seen:</label>
    <input type="date" id="date" class="c-textual-input" name="date">
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
        <svg class="c-form-select__icon">
            <use xlink:href="#caret-icon" />
        </svg>
    </span>
</p>
<button>Submit</button>
</form>