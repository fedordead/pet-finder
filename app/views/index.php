<div class="l-flex">
    <aside class="l-sidebar">

        <form id="report_form" name="report_form">

    <?php
    include("partials/pet-details-form.php");
    ?>

        </form>

    </aside>

    <main class="l-main" role="main">

        <h2 class="heading-headline h-spacing">Pets</h2>

        <ul id="pet-results-list" class="l-grid l-grid--gutter-vertical-large">

    <?php
        include($_SERVER['DOCUMENT_ROOT']."/partials/pet-results-list.php");
    ?>

        </ul>

    </main>
</div>
