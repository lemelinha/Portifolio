<?php

namespace app\controllers;
use app\models\Admin;
use app\models\Home;

class AdminController {
    private $AdminModel;
    private $view; // view a ser carregada

    public function __construct(){
        $this->AdminModel = new Admin();
    }
    
    public function index(){
        $view = 'admin/admin-login.view.php';
        $title = 'Login';

        if ($this->verify()){
            $view = 'admin/admin-index.view.php';
            $title = 'Admin';
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

    public function addProject(){
        $view = 'admin/admin-login.view.php';
        $title = "Login";

        if ($this->verify()){
            $view = 'admin/admin-add.view.php';
            $title = "Adicionar Projeto";
        }

        if (isset($_POST['titulo']) && $_POST['descricao']){
            if ($this->AdminModel->addProject()) {
                $view = 'admin/admin-index.view.php';
            }
        }

        return [
            "view" => $view,
            "data" => [
                "title" => $title,
                "css" => 'style-admin.css',
                "alert" => $alert??null
            ]
        ];
    }

    public function editAdmin(){
        $view = 'admin/admin-login.view.php';
        $title = 'Admin';
        
        if($this->verify()){
            $view = 'admin/admin-edit-admin.view.php';
            $title = 'Editar Pessoal';
        }

        if (isset($_POST['editar'])){
            $this->AdminModel->editAdminInfo();
        } 

        $adminInfo = $this->AdminModel->getAdminInfo();

        return [
            "view" => $view,
            "data" => [
                "title" => $title,
                "css" => 'style-admin.css',
                "adminInfo" => $adminInfo
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
