<main class="l-main" role="main">

    <h2 class="heading-headline h-spacing">Found</h2>

    <p class="h-spacing-small">Add details of the pet you've found below:</p>

    <form method="POST" action="/new-pet"  name="report_form">

    <?php
        include("partials/pet-details-form.php");
    ?>

        <button class="c-button" type="submit">Report found</button>

    </form>

</main>
