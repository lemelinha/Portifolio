<?php

namespace app\controllers;
use app\models\Home;

class HomeController {
    private $HomeModel;

    public function __construct(){
        $this->HomeModel = new Home();
    }

    public function index(){
        [$projects, $images] = $this->HomeModel->listProjects();

        return [
            "view" => "home.view.php",
            "data" => [
                "title" => "existe",
                "projects" => $projects,
                "images" => json_encode($images)
            ]
        ];
    }
}
