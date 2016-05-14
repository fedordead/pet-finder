<p>Status:</p>

<?php if ($page =='search') { ?>

<p class="c-radio-input">
    <input id="lost-found" type="radio" value="all" name="status">
    <label for="lost-found">Lost &amp; Found</label>
</p>

<?php } ?>

<p class="c-radio-input">
    <input id="lost" type="radio" value="lost" name="status">
    <label for="lost">Lost</label>
</p>

<p class="c-radio-input">
    <input id="found" type="radio" value="found" name="status">
    <label for="found">Found</label>
</p>

<p class="c-select-list">
    <label for="species">Species:</label>
    <select id="species" name="species">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
    </select>
</p>

<p class="c-select-list">
    <label for="breed">Breed:</label>
    <select id="breed" name="breed">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="alsation">Alsation</option>
        <option value="yorkshire-terrier">Yorkshire Terrier</option>
    </select>
</p>

<p class="c-select-list">
    <label for="size">Size:</label>
    <select id="size" name="size">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>
</p>

<p class="c-select-list">
    <label for="colour">Colour:</label>
    <select id="colour" name="colour">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="black">Black</option>
        <option value="ginger">Ginger</option>
        <option value="grey">Grey</option>
    </select>
</p>

<p>Chipped</p>

<?php if ($page =='search') { ?>

    <p class="c-radio-input">
        <input id="both-chipped" type="radio" value="true" name="is-chipped">
        <label for="both-chipped">Show all</label>
    </p>

<?php } ?>

<p class="c-radio-input">
    <input id="chipped" type="radio" value="true" name="is-chipped">
    <label for="chipped">Yes</label>
</p>

<p class="c-radio-input">
    <input id="not-chipped" type="radio" value="false" name="is-chipped">
    <label for="not-chipped">No</label>
</p>

<p class="c-textual-input">
    <label for="chip-number">Chip number:</label>
    <input type="text" id="chip-number" name="chip-number">
</p>

<p class="c-select-list">
    <label for="collar">Collar:</label>
    <select id="collar" name="collar">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="none">None</option>
        <option value="green">Green</option>
        <option value="yellow">Yellow</option>
    </select>
</p>

<p class="c-textual-input">
    <label for="date">Date last seen:</label>
    <input type="date" id="date" name="date">
</p>

<p class="c-select-list">
    <label for="location">Location last seen:</label>
    <select id="location" name="location">

        <?php if ($page =='search') { ?>
            <option value="all">Show all</option>
        <?php } ?>

        <option value="walton">Walton-on-Thames</option>
        <option value="staines">Westside Staines Massive</option>
        <option value="oz">Australia</option>
    </select>
</p>