<?php


require 'app/Process/Autoload.php';

$Auto = new Autoload(['Process/Dispatch', 'Controllers/IndexController', 'Process/Route']);
$Dispatch = new Dispatch();

if(isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}
$Routes = new Route();