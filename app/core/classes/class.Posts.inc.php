<?php

/**
*
*
*
* Posts Class
*
*
*
*/
class Posts {

    function __construct() {
        // Config
        include_once 'core/database.php';

        // Connect to Database
        try {
            // Store database as db property of class
            $this->db = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            }
    }

    // Get All Posts
    function get_all() {
         // URL Parameters
        $url_params = $_GET;

        // if URL parameters process query
        if($url_params){
            // Empty Search Array
            $search = [];
            // Valid Fields
            $valid = ['name', 'breed', 'colour', 'size', 'species', 'status', 'collar', 'chip_number', 'date_lost', 'location'];

            foreach( $valid as $column )
            {   
               // Check if field is present in URL 
               if( isset( $_GET[ $column ] ) )
               {
                  // add it to the search array.
                  $search[] = $column . ' = "' . $_GET[ $column ] .'"';
               }
            }
            // Implode the array in to query string
            $sql = 'SELECT id, name, breed, colour, size, species, status, collar, chip_number, date_lost, location FROM pets WHERE ' . implode( ' AND ', $search );
        } else {
            // If no query parameters, return all posts
            $sql = 'SELECT id, name, breed, colour, size, species, status, collar, chip_number, date_lost, location FROM pets'; 
        }
        // Prepare Data
        $itemsQuery = $this->db->prepare($sql);
        // Execute query
        $itemsQuery->execute();
        // If data, assign it to $items, otherwise empty array
        $items = $itemsQuery->rowCount() ? $itemsQuery : [];
        // Return items
        return $items;
    }

    // Get Single Post
    function get_single() {
        // Parse URL
        $url = parseUrl();
        // If ID set
        if(isset($url[1])){
            // Set post ID
            $post_id = $url[1];
            // Set up SQL query with post_id placeholder
            $sql = "SELECT id, name, breed, colour, size, species, status, collar, chip_number, date_lost, location
                FROM pets
                WHERE id = :post_id";
            // Prepare data
            $itemsQuery = $this->db->prepare($sql);
            // Execute, passing in post_id from the URL
            $itemsQuery->execute([
                'post_id' => $post_id]
            );
            // Fetch single line
            $post = $itemsQuery->fetch();
            // Return post
            return $post;
        }
    }

    function submit_post() {
        // Get POST parameters
        if(isset($_POST['pet_name'], $_POST['status'], $_POST['species'])){

            $name = trim($_POST['pet_name']);
            $status = trim($_POST['status']);
            $species = trim($_POST['species']);
            $breed = trim($_POST['breed']);
            $collar = trim($_POST['collar']);
            $size = trim($_POST['size']);
            $colour = trim($_POST['colour']);
            $date = trim($_POST['date']);
            $chip_number = trim($_POST['chip_number']);
            $location = trim($_POST['location']);
            // Placeholder user
            $user = 1;
            // SQL query
            $sql = 'INSERT INTO pets (name, status, species, breed, collar, size, colour, date_lost, chip_number, location, user, time) VALUES (:name, :status, :species, :breed, :collar, :size, :colour, :date_lost, :chip_number, :location, :user, NOW())';
            // Prepare
            $addQuery = $this->db->prepare($sql);
            // Execute
            $addQuery->execute([
                'name' => $name,
                'status' => $status,
                'species' => $species,
                'breed' => $breed,
                'collar' => $collar,
                'size' => $size,
                'colour' => $colour,
                'date_lost' => $date,
                'chip_number' => $chip_number,
                'location' => $location,
                'user' => $user
            ]);

        }
        // Redirect to home
        header('Location: index.php');
    }
}
?>