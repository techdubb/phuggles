<?php

include './Phuggles/phuggles.php';
	
$p = new Phuggles();

// Delete beer with id 7
//print_r( $p->delete_beer(7) );
	

// Get all beers
print_r( $p->get_beers() );


/*
// Get beer with id 1
print_r( $p->get_beer(1) );
*/

/*
// Create beer
$beer_data = array('name' => 'testing', 'description' => 'awesome', 'abv' => 6.4);
$params = array('brewery_id' => 1, 'beer' => $beer_data);
print_r( $p->create_beer($params) );
*/

?>
