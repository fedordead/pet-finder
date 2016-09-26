<?php
    include $_SERVER['DOCUMENT_ROOT'].'/core/database.php';

    // Connect to Database
    try {
        // Store database as db property of class
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
<fieldset <?php if ($page != 'index') { echo 'class="h-spacing-large"'; } ?>>

    <legend class="h-spacing-small"><?php if ($page == 'index') { echo 'Filters'; } else { echo 'Pet details'; } ?></legend>

    <?php if ($page == 'index') { ?>

    <fieldset>
        <legend class="h-spacing-tiny">Status:</legend>

        <div class="c-radio-switch-container h-spacing">

            <p class="c-radio-switch">
                <input id="lost-found" type="radio" value="" name="status" class="c-radio-switch__input" checked>
                <label for="lost-found" class="c-radio-switch__label">All</label>
            </p>

            <p class="c-radio-switch">
                <input id="lost" type="radio" value="1" name="status" class="c-radio-switch__input">
                <label for="lost" class="c-radio-switch__label">Lost</label>
            </p>

            <p class="c-radio-switch">
                <input id="found" type="radio" value="2" name="status" class="c-radio-switch__input">
                <label for="found" class="c-radio-switch__label">Found</label>
            </p>

        </div>
    </fieldset>

    <?php } ?>

    <?php if ($page == 'lost') { ?>
        <input type="hidden" name="status" value="<?php echo '1' ?>">
    <?php } ?>
    <?php if ($page == 'found') { ?>
        <input type="hidden" name="status" value="<?php echo '2' ?>">
    <?php } ?>


    <p class="h-spacing">
        <label for="pet-name">Pet's name:</label>
        <input type="text" id="pet-name" name="name" class="c-textual-input">
    </p>

    <?php if ($page != 'index') { ?>
    <div class="h-spacing">
        <p>Photo: </p>

        <div class="c-file-upload">

            <img id="pet_photo" src="" alt="Pet image" class="c-file-upload__image h-hide">

            <input id="pet_photo_upload" class="c-file-upload__input h-hide-visually" type="file" name="pet_photo_upload">

            <label for="pet_photo_upload" class="c-button">

                <svg class="c-file-upload__icon" height="25" width="33">
                    <use xlink:href="#camera-plus-icon" />
                </svg>

                <span class="c-file-upload__text">Choose image</span>

                <span id="spinner" class="c-spinner h-hide"></span>
            </label>
        </div>
    </div>
    <?php } ?>

    <p class="h-spacing">
        <label for="species">Species:</label>
        <span class="c-form-select">
            <select id="species" class="c-form-select__select" name="species_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>
                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_species ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

    <p class="h-spacing">
        <label for="breed">Breed:</label>
        <span class="c-form-select">
            <select id="breed" class="c-form-select__select" name="breed_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>
                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_breeds ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

    <p class="h-spacing">
        <label for="size">Size:</label>
        <span class="c-form-select">
            <select id="size" class="c-form-select__select" name="size_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>

                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_sizes ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

    <p class="h-spacing">
        <label for="colour">Colour:</label>
        <span class="c-form-select">
            <select id="colour" class="c-form-select__select" name="colour_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>

                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_colours ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

    <p class="h-spacing-tiny">Chipped:</p>

    <div class="c-radio-switch-container h-spacing">

    <?php if ($page =='index') { ?>

        <p class="c-radio-switch">
            <input id="both-chipped" type="radio" value="" name="is_chipped" class="c-radio-switch__input  js-field-toggle-trigger"  data-set-target-display="chip-number-wrap, none" checked>
            <label for="both-chipped" class="c-radio-switch__label">All</label>
        </p>

    <?php } ?>

        <p class="c-radio-switch">
            <input id="chipped" type="radio" value="true" name="is_chipped" class="c-radio-switch__input  js-field-toggle-trigger"  data-set-target-display="chip-number-wrap, block">
            <label for="chipped" class="c-radio-switch__label">Yes</label>
        </p>

        <p class="c-radio-switch">
            <input id="not-chipped" type="radio" value="false" name="is_chipped" class="c-radio-switch__input  js-field-toggle-trigger"  data-set-target-display="chip-number-wrap, none">
            <label for="not-chipped" class="c-radio-switch__label">No</label>
        </p>
    </div>

    <p id="chip-number-wrap" style="display: none" class="h-spacing js-field-toggle-target">
        <label for="chip-number">Chip number:</label>
        <input type="text" id="chip-number" name="chip_number" class="c-textual-input">
    </p>

    <p class="h-spacing">
        <label for="collar">Collar:</label>
        <span class="c-form-select">
            <select id="collar" class="c-form-select__select" name="collar_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>

                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_collars ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

    <p class="h-spacing">
        <label for="date">Date <span class="js-seen-found-text">last seen</span>:</label>
        <input type="date" id="date" class="c-textual-input" name="date">
    </p>

    <p class="h-spacing">
        <label for="location">Location <span class="js-seen-found-text">last seen</span>:</label>
        <span class="c-form-select">
            <select id="location" class="c-form-select__select" name="location_id">

                <?php if ($page =='index') { ?>
                    <option value="">Show all</option>
                    <?php } else { ?>
                    <option selected="selected" disabled>Please select</option>
                <?php } ?>

                <?php
                    $stmt = $conn->prepare('SELECT * FROM LU_locations ORDER BY name');
                    $stmt->execute();
                    // If data, assign it to $items, otherwise empty array
                    $items = $stmt->rowCount() ? $stmt : [];

                    foreach ($items as $item) {
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <svg class="c-form-select__icon">
                <use xlink:href="#caret-icon" />
            </svg>
        </span>
    </p>

</fieldset>

<?php if ($page != 'index') { ?>

<fieldset>

    <legend class="h-spacing-small">Your contact details</legend>

    <p class="h-spacing">
        <label for="name" class="is-required">Name: <span class="h-hide-visually">(required)</span></label>
        <input type="text" id="name" name="user_name" class="c-textual-input" required>
        <span class="c-message c-message--error" style="display: none;">We're gonna need your name I'm afraid, so people can contact you.</span>
    </p>

    <p class="h-spacing">
        <label for="email" class="is-required">Email: <span class="h-hide-visually">(required)</span></label>
        <input type="text" id="email" name="email" class="c-textual-input" required>
        <span class="c-message c-message--error" style="display: none;">Hook us up with your email dawg.  Just makes life easier for all parties.</span>
    </p>

    <p>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" class="c-textual-input">
    </p>

</fieldset>

<?php } ?>
