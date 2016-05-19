<?php

/* ###### Get Single Post ###### */

function get_single_post(){

    $url = parseUrl();

    if(isset($url[1])){
        $post_id = $url[1];
        // Get Firebase JSON of single post
        $json = file_get_contents(FIREBASE_URL.'/posts/p'.$post_id.'.json');
        // Decode JSON
        $obj = json_decode($json);
        // Return data
        if(!empty($obj)){
            return $obj;
        } else {
            return false;
        }       
    }   
}

// get the post
$pet = get_single_post();

?>