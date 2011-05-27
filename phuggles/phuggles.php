<?php

/**
 * Phuggles is a PHP client that wraps the Open Beer Database API.
 * @author Matthew Hokanson <m@h0ke.com>
 * @version 0.1.0
 */

include "request.php";

class Phuggles
{
    /**
     * Request object
     */
    private $request;

    /**
     * Constructor
     */
    function __construct() {
        $this->request = new Request();
    }

    /**
     * BEERS
     */

    /**
     * Get Beers
     */
    function get_beers($params = array()) {
        return $this->request->get("beers.json", $params);
    }

    /**
     * Get a Beer
     */
    function get_beer($id) {
        return $this->request->get("beers/" . $id . ".json");
    }

    /**
     * Create a Beer
     */
    function create_beer($params) {
        return $this->request->post("beers.json", $params);
    }

    /**
     * Delete a Beer
     */
    function delete_beer($id) {
        return $this->request->delete("beers/" . $id . ".json");
    }


    /**
     * BREWERIES
     */

    /**
     * Get Brewery
     */
    function get_breweries($params = array()) {
        return $this->request->get("breweries.json", $params);
    }

    /**
     * Get a Brewery
     */
    function get_brewery($id) {
        return $this->request->get("breweries/" . $id . ".json");
    }

    /**
     * Create a Brewery
     */
    function create_brewery($params) {
        return $this->request->post("breweries.json", $params);
    }

    /**
     * Delete a Brewery
     */
    function delete_brewery($id) {
        return $this->request->delete("breweries/" . $id . ".json");
    }
}
