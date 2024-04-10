<?php

namespace app\controllers;
use app\models\Admin;
use app\models\Home;

class AdminController {
    private $AdminModel;

    public function __construct(){
        $this->AdminModel = new Admin();
    }

    public function index(){
        $view = 'admin/admin-login.view.php';

        if ($this->verify()){
            $view = 'admin/admin-index.view.php';
            [$projects, $images] = Home::listProjects();
            $adminInfo = Home::getAdminInfo();
        }

        return [
            "view" => $view,
            "data" => [
                'title' => 'Admin',
                'css' => 'style-admin.css',
                'adminPFP' => $adminInfo->cd_caminho_pfp??null,
                'projects' => $projects??null,
                'images' => $images??null
            ]
        ];
    }

    public function verify(){
        if ($this->AdminModel->verifyLogin()){
            return true;
        }

        return false;
    }

    public function logout(){
        if(isset($_SESSION['auth'])){
            unset($_SESSION['auth']);
        }

        header('Location: /');
    }
}
