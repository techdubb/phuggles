<?php

require_once "./phuggles/phuggles.php";

// Configuration options.
Phuggles\Configuration::$host          = "http://api.localhost:3000/v1/";
Phuggles\Configuration::$public_token  = "YOUR_PUBLIC_TOKEN";
Phuggles\Configuration::$private_token = "YOUR_PRIVATE_TOKEN";

// Get all beers.
print_r(Phuggles\Beer::all());

// Get a beer by ID.
print_r(Phuggles\Beer::get(1));

// Create a beer.
$parameters = array(
    'brewery_id' => 1,
    'beer'       => array(
        'name'        => 'testing',
        'description' => 'awesome',
        'abv'         => 6.4
    )
);
print_r(Phuggles\Beer::create($parameters));

// Delete a beer by ID.
print_r(Phuggles\Beer::delete(7));
