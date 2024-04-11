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

    public function add(){
        $view = 'admin/admin-login.view.php';
        $title = "Login";

        if ($this->verify()){
            $view = 'admin/admin-add.view.php';
            $title = "Adicionar Projeto";
        }

        if (isset($_POST['titulo']) && $_POST['descricao']){
            if ($this->AdminModel->addProject()) {
                $alert = "<script>
                            alert('Projeto Adicionado com sucesso!')
                          </script>";
                $view = 'admin/admin-index.view.php';
            } else {
                $alert = "<script>
                            alert('Algo deu errado!')
                          </script>";
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
