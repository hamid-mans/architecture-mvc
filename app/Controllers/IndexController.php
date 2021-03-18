<?php

$Auto = new Autoload(['Models/Model', 'Models/Message']);

class IndexController extends Controller {

    public function index($var) {
        $model = new Model();
        $message = new Message();
        $msg = $message->all();
        return $this->render('home', [
            'message' => $msg
        ]);
    }

}