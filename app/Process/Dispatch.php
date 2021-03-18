<?php



class Dispatch extends Autoload {
    
    public function __construct() {
        // @chargé
    }

    public function init($controller, $function, $params = 0) {
        $cont = $controller . 'Controller';
        $controller = new $cont();
        $controller->$function($params);
    }

    public function view($file, $args) {
        extract($args);
        require_once './' . $this->viewPathName . '/' . $file . '.php';
    }

}