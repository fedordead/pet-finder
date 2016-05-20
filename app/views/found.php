<main class="l-main" role="main">

    <h2 class="heading heading--main h-spacing-base">Found</h2>

    <p class="h-spacing-small">Add details of the pet you've found below:</p>

    <form method="POST" action="/new-pet">

    <?php
        include("partials/pet-details-form.php");
    ?>

        <button class="c-button" type="submit">Report found</button>

    </form>

</main>
