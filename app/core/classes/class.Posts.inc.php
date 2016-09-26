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
        include $_SERVER['DOCUMENT_ROOT'].'/core/database.php';

        // Connect to Database
        try {
            // Store database as db property of class
            $this->db = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            }
    }

    // Get All Posts
    function get_all() {
         // URL Parameters
        $url_params = $_GET;

        // if URL parameters process query
        if($url_params) {
            // Empty Search Array
            $search = [];
            // Valid Fields
            $valid = ['name', 'breed_id', 'colour_id', 'size_id', 'species_id', 'status_id', 'collar_id', 'chip_number', 'date_lost', 'location_id'];

            foreach( $valid as $column ) {
               // Check if field is present in URL
               if( isset( $_GET[ $column ] ) ) {
                  // add it to the search array.
                  $search[] = $column . ' LIKE "%' . $_GET[ $column ] .'%"';
               }
            }
            // Implode the array in to query string
            $sql = 'SELECT * FROM pets WHERE ' . implode( ' AND ', $search );
        } else {
            // If no query parameters, return all posts
            $sql = 'SELECT * FROM pets';
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
        if(isset($url[1])) {
            // Set post ID
            $post_id = $url[1];
            // Set up SQL query with post_id placeholder
            $sql = "SELECT *
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
        if(isset($_POST['pet_name'], $_POST['status_id'], $_POST['species_id'])) {

            $name = trim($_POST['pet_name']);
            $status_id = trim($_POST['status_id']);
            $species_id = trim($_POST['species_id']);
            $breed_id = trim($_POST['breed_id']);
            $collar_id = trim($_POST['collar_id']);
            $size_id = trim($_POST['size_id']);
            $colour_id = trim($_POST['colour_id']);
            $date = trim($_POST['date']);
            $chip_number = trim($_POST['chip_number']);
            $location_id = trim($_POST['location_id']);
            // Placeholder user_id
            $user_id = 1;
            // SQL query
            $sql = 'INSERT INTO pets (name, status_id, species_id, breed_id, collar_id, size_id, colour_id, date_lost, chip_number, location_id, user_id, time) VALUES (:name, :status_id, :species_id, :breed_id, :collar_id, :size_id, :colour_id, :date_lost, :chip_number, :location_id, :user_id, NOW())';
            // Prepare
            $addQuery = $this->db->prepare($sql);
            // Execute
            $addQuery->execute([
                'name' => $name,
                'status_id' => $status_id,
                'species_id' => $species_id,
                'breed_id' => $breed_id,
                'collar_id' => $collar_id,
                'size_id' => $size_id,
                'colour_id' => $colour_id,
                'date_lost' => $date,
                'chip_number' => $chip_number,
                'location_id' => $location_id,
                'user_id' => $user_id
            ]);

        }
        // Redirect to home
        header('Location: index.php');
    }
}
?>
