<?php

namespace app\controllers;
use app\models\Admin;
use app\models\Home;

class AdminController {
    private $AdminModel;

    public function __construct(){
        $this->AdminModel = new Admin();
    }

    public function verify(){
        if ($this->AdminModel->verifyLogin()){
            $view = 'admin/admin-index.view.php';
            [$projects, $images] = Home::listProjects();
            $adminInfo = Home::getAdminInfo();
        } else {
            $view = 'admin/admin-login.view.php';
        }

        return [
            "view" => $view,
            "data" => [
                'title' => 'Admin',
                'css' => 'style-admin.css',
                'adminInfo' => $adminInfo??null,
                'projects' => $projects??null,
                'images' => $images??null
            ]
        ];
    }

    public function logout(){
        if(isset($_SESSION['auth'])){
            unset($_SESSION['auth']);
        }

        header('Location: /');
    }
}
