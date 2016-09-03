<?php  

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

/* ###### Helper Functions ###### */

// Autoload Class
function __autoload($class_name) {
      include_once 'core/classes/class.' . $class_name . '.inc.php';
}

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
