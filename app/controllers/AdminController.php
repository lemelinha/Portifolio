<?php

namespace app\controllers;
use app\models\Admin;

class AdminController {
    private $AdminModel;

    public function __construct(){
        $this->AdminModel = new Admin();
    }

    public function verify(){
        if ($this->AdminModel->verifyLogin()){
            $view = 'admin/admin-index.view.php';
            [$projects, $images] = app\models\Home::listProjects();
            $adminInfo = app\models\Home::getAdminInfo();
        } else {
            $view = 'admin/admin-login.view.php';
        }

        return [
            "view" => $view,
            "data" => [
                'title' => 'Admin',
                'adminInfo' => $adminInfo??null,
                'projects' => $projects??null,
                'images' => $images??null
            ]
        ];
    }
}
