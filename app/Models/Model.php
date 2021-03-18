<?php

require_once 'app/Process/Config.php';

class Model extends Config {

    public function __construct() {
        $Config = new Config();
        return new PDO('mysql:host=' . $Config->DBhost . ';dbname=' . $Config->DBname . ';charset=utf8', $Config->DBuser, $Config->DBpassword);
    }

    public function init() {
        return $this->__construct();
    }

}