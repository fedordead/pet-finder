<?php
    $page="lost";
    include("partials/header.php");
?>

<main class="l-main" role="main">

    <h2 class="heading heading--main h-spacing-base">Lost</h2>

    <p class="h-spacing-small">Add details of your lost pet below:</p>

    <form>

    <?php
        include("partials/pet-details-form.php");
    ?>

        <button class="c-button" type="submit">Report lost</button>

    </form>

</main>

<?php
    include("partials/footer.php");
?>
