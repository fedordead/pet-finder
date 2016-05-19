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
    $page = "search";
    // get URL
    $url = parseURL();
    // update page if set
    if(isset($url[0])){
        if(file_exists('controllers/'. $url[0] . '.php')){
            $page = $url[0];
        }
        else {
            $page = '404';
        }
    }

    // Require Controller
    require_once 'controllers/' .$page. '.php';

    // Require View
    require_once 'views/' . $page . '.php';

}

/* ###### Submit Pet ###### */

function submit_pet(){
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