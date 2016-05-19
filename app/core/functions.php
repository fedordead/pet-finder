<?php require 'database.php'; 

/*
*
*
* Global Functions 
*
*
*/

/* ###### INIT ###### */

function init() {
    // Default Page
    $page = "index";
    // get URL
    $url = parseURL();
    // update page if set
    if(isset($url[0])){
        $page = $url[0];
    }
    
    // Check controller
    if(file_exists('controllers/'. $page . '.php')){
        require_once 'controllers/' .$page. '.php';
    }
    // include Header
    include("partials/header.php");

    // Require View
    if(file_exists('views/'. $page . '.php')){
        require_once 'views/' . $page . '.php';
    } else {
        require_once 'views/404.php';
    }

    include("partials/footer.php");
}


/* ###### Get all posts ###### */

function get_all_posts(){

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


/* ###### Submit Pet ###### */

function submit_post(){
    $post_id = $_SERVER['REQUEST_TIME'];
    header('Location:http://localhost/pet/'.$post_id);
    $post_params = $_POST;
    $post_params['time'] = $post_id;

    // CURL stuff
    $url = FIREBASE_URL.'/posts/p'.$post_id.'.json';    
    $data = json_encode($post_params);
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

    $response = curl_exec($ch);

    if(!$response) {
        print_r('No response from server');
        return false;
    }
}

/* ###### Helper Functions ###### */

// Print out variable if it exists, replace with default if not
function print_tag($var, $default = '&mdash;') {
    echo isset($var) ? $var : $default;
}

// Pretty URLs
function parseUrl() {
    // Trim URL, Sanitize and explode to array at each /
    if(isset($_GET['url'])) {
        // Trim URL, Sanitize and explode to array at each /
        return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
}

?>