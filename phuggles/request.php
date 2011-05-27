<?php

namespace Phuggles;

class Request {
    static public function get($path, $parameters = array()) {
        $parameters = array_merge($parameters, array("token" => Configuration::$public_token));
        $path       = $path . "?" . http_build_query($parameters);

        return self::request($path);
    }

    static public function post($path, $parameters = array()) {
        $parameters = array_merge($parameters, array("token" => Configuration::$private_token));
        $options    = array(
            CURLOPT_POST       => 1,
            CURLOPT_POSTFIELDS => http_build_query($parameters)
        );

        return self::request($path, $options);
    }

    static public function delete($path) {
        $parameters = array("token" => Configuration::$private_token);
        $options    = array(
            CURLOPT_POSTFIELDS    => http_build_query($parameters),
            CURLOPT_CUSTOMREQUEST => "DELETE"
        );

        return self::request($path, $options);
    }

    static private function request($path, $options = array()) {
        $handle = curl_init();

        curl_setopt($handle, CURLOPT_URL, Configuration::$host . $path);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);

        foreach ($options as $key => $value) {
            curl_setopt($handle, $key, $value);
        }

        $response = curl_exec($handle);

        curl_close($handle);

        return json_decode($response, true);
    }
}
