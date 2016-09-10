
<div class="l-grid l-grid--gutterless">

    <aside class="l-grid__item">

        <div class="l-sidebar">

            <form id="report_form" name="report_form">

<?php
    include("partials/pet-details-form.php");
?>

            </form>

        </div>
    </aside>

    <div class="l-grid__item">

        <main class="l-main" role="main">

            <h2 class="heading-headline h-spacing">Pets</h2>

            <ul id="pet-results-list" class="l-grid">

<?php
    include($_SERVER['DOCUMENT_ROOT']."/partials/pet-results-list.php");
?>

            </ul>

        </main>

    </div>
    <!-- .l-grid__item -->
</div>
<!-- .l-grid -->
