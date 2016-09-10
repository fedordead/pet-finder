<?php
// Load class
__autoload('Posts');
// New Posts instance
$Posts = new Posts;
// Get all posts
$posts = $Posts->get_all();

?>