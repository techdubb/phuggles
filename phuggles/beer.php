<?php

namespace Phuggles;

class Beer {
    static public function all($parameters = array()) {
        return Request::get("beers.json", $parameters);
    }

    static public function create($parameters = array()) {
        return Request::post("beers.json", $parameters);
    }

    static public function delete($id) {
        return Request::delete("beers/" . $id);
    }

    static public function get($id) {
        return Request::get("beers/" . $id . ".json");
    }
}
