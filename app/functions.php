<?php require 'database.php'; 

/*
*
*
* Functions 
*
*
*/

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
				$the_posts[] = $array[$id];
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
	
	if(isset($_GET['pet'])){
		$post_id = $_GET['pet'];
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


/* ###### Submit Lost Pet ###### */

function submit_lost(){
	header('Location:http://localhost/');
	$post_params = $_POST;
	$post_params['time'] = $_SERVER['REQUEST_TIME'];
	$post_params['status'] = 'lost';

	// CURL stuff
	$url = FIREBASE_URL.'/posts/p'.$_SERVER['REQUEST_TIME'].'.json';    
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

	// Cross Reference with Found Pets? Think the 'does this answer your question' feature on Stack Overflow

/* ###### Submit Found Pet ###### */

	/* Fields
	- Type
	- Breed
	- Size
	- Colour
	- Chipped?
	- Collar? (colour)
	- Picture(s)
	- Found Location - Post Code/Geo Location
	- Found Date
	- Any Other Notes
	*/

	// Cross Reference with Lost Pets? Think the 'does this answer your question' feature on Stack Overflow

/* ###### Claim Found Pet ('That's mine!') ###### */

	// How do users get in touch?

/* ###### Find Lost Pet ('I Found it') ###### */

/* ###### Search/Filter ###### */
