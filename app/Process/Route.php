<?php

class Route extends Dispatch {
    
    public function __construct() {
        if(empty($url[0])) {
            $this->init('Index', 'index');
        } else if($url[0] == 'a') {
            echo "a url";
        }
    }

}