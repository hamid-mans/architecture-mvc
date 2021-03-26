<?php

class Route extends Dispatch {
    
    public function __construct($url) {
        if(empty($url[0]) || $url[0] == 'home') {
            $this->init('Index', 'index');
        } else if($url[0] == 'about') {
            echo "about url";
        } else {
            echo "404 error";
        }
    }

}