# Phuggles

A PHP client for [Open Beer Database](https://github.com/tristandunn/openbeerdatabase).

## Requirements

* PHP 5.3+

## Example

~~~ php
<?php

require_once "./phuggles/phuggles.php";

// Get a beer by ID.
print_r(Phuggles\Beer::get(1));
~~~

Checkout `example.php` for more.

## License

Phuggles uses the MIT license. See LICENSE for more details.
