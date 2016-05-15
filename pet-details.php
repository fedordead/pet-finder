<?php
    $page="pet-details";
    include("includes/header.php");
?>

<main role="main" class="l-container">

    <h2 class="heading heading--main h-spacing-base">{{ Lost }}: {{ Barbara }}</h2>

    <img class="h-spacing-base" src="http://placekitten.com/200/300" alt="Place Kitten" />

    <ul class="h-spacing-base">
        <li>Species: {{ Cat }}</li>
        <li>Breed: {{ Siamese }}</li>
        <li>Size: {{ Medium }}</li>
        <li>Colour: {{ White }}</li>
        <li>Chipped: {{ No }}</li>
        <li>Collar: {{ Blue }}</li>
        <li>Last seen: {{ 14 May 2016 }}, {{ Dibden Purlieu }} [Map]</li>
    </ul>

    <h3>Please contact:</h3>

    <address>
        <p>{{ David Berner }}</p>
        <p>{{ 07894 535 194 }}</p>
        <p>{{ davidajberner@gmail.com }}</p>
    </address>


</main>

<?php
    include("includes/footer.php");
?>
