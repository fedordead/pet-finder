<?php
// Load class
__autoload('Posts');
// New Posts Instance
$Posts = new Posts;
// Get Single Post as Pet
$pet = $Posts->get_single();

?>