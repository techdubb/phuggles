<?php

include "./phuggles/phuggles.php";

// Define the API URL and tokens.
define("API_URL",       "http://api.openbeerdatabase.com/v1/");
define("PUBLIC_TOKEN",  "");
define("PRIVATE_TOKEN", "");

$p = new Phuggles();

// Delete beer with ID 7.
// print_r($p->delete_beer(7));

// Get all beers.
// print_r($p->get_beers());

// Get beer with ID 1.
// print_r($p->get_beer(1);

// Create a beer.
/*
$params = array(
    'brewery_id' => 1,
    'beer'       => array(
      'name'        => 'testing',
      'description' => 'awesome',
      'abv'         => 6.4
    )
);
print_r($p->create_beer($params);
*/
