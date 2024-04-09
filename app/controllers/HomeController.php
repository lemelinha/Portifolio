<?php

namespace app\controllers;
use app\models\Home;

class HomeController {
    private $HomeModel;

    public function __construct(){
        $this->HomeModel = new Home();
    }

    public function index(){       
        return [
            "view" => "home.view.php",
            "data" => [
                "title" => "existe"
            ]
        ];
    }
}
