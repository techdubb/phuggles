<?php

/**
 * Phuggles is a PHP client that wraps the Open Beer Database API.
 * @author Matthew Hokanson
 * @version 0.1.0
 * Questions, comments? m@h0ke.com
 */

include 'request.php';

class Phuggles
{
    /**
    * Request object
    */
    private $r;

    /**
    * Constructor
    */
    function __construct() {
        $this->r = new Request();
    }
    
    /**
    * BEERS
    */
    
    /**
    * Get Beers
    */
    function get_beers($params = array()) {
        return $this->r->get("beers.json", $params);
    }
    
    /**
    * Get a Beer
    */
    function get_beer($id) {
        return $this->r->get("beers/" . $id . ".json");
    }
    
    /**
    * Create a Beer
    */
    function create_beer($params) {
        return $this->r->post("beers.json", $params);
    }
    
    /**
    * Delete a Beer
    */
    function delete_beer($id) {
        return $this->r->delete("beers/" . $id . ".json");
    }
    
    
    /**
    * BREWERIES
    */
    
    /**
    * Get Brewery
    */
    function get_breweries($params = array()) {
        return $this->r->get("breweries.json", $params);
    }
    
    /**
    * Get a Brewery
    */
    function get_brewery($id) {
        return $this->r->get("breweries/" . $id . ".json");
    }
    
    /**
    * Create a Brewery
    */
    function create_brewery($params) {
        return $this->r->post("breweries.json", $params);
    }
    
    /**
    * Delete a Brewery
    */
    function delete_brewery($id) {
        return $this->r->delete("breweries/" . $id . ".json");
    }
}

?>
