<?php
// Load class
__autoload('Posts');
// New Posts instance
$Posts = new Posts;
// Get all posts
$Posts->submit_post();

?>