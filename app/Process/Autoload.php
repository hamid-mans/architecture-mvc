<?php

require_once 'app/Controllers/Controller.php';

class Autoload extends Controller {

    // @array includes
    public array $includes;

    public function __construct($includes = []) {

        foreach ($includes as $value) {
            include 'app/' . $value . '.php';
        }

    }

}