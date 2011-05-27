<?php

namespace Phuggles;

class Brewery {
    static public function all($parameters = array()) {
        return Request::get("breweries.json", $parameters);
    }

    static public function create($parameters = array()) {
        return Request::post("breweries.json", $parameters);
    }

    static public function delete($id) {
        return Request::delete("breweries/" . $id);
    }

    static public function get($id) {
        return Request::get("breweries/" . $id . ".json");
    }
}
