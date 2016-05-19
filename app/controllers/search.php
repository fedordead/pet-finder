<?php

/* ###### Get all posts ###### */

function get_posts(){

    // Get Firebase JSON
    $json = file_get_contents(FIREBASE_URL.'/posts.json');
    // Decode JSON
    $obj = json_decode($json);
    // Convert to array
    $array = (array) $obj;
    // Empty posts array
    $the_posts = [];
    // Get Params
    $url_params = $_GET;

    if(!empty($url_params)){    
        // Push each param to array
        foreach ($url_params as $param => $value) {
            $params[] = $value;
        }
        // Loop through Firebase Array
        foreach ($array as $id => $post) {
            // Push properties of post to array
            $post_values = [];

            foreach ($post as $key => $value) {
                $post_values[] = $value;
            }
            // Compare params array to post_values array. If all params in post_values, push to the_posts
            if (!array_diff( $params, $post_values )){
                $the_posts[$id] = $array[$id];
            }
        }
    } else {
        $the_posts = $array;
    }


    // Return filtered posts
    return array_reverse($the_posts);

}   

// get the posts
$posts = get_posts();
?>