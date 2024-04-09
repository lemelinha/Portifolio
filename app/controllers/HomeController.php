<?php

namespace app\controllers;
use app\models\Home;

class HomeController {
    private $HomeModel;

    public function __construct(){
        $this->HomeModel = new Home();
    }

    public function index(){       
        if (class_exists('Home')){
            echo 'exite';
        }
        return [
            "view" => "home.view.php",
            "data" => [
                "title" => "existe"
            ]
        ];
    }
}
