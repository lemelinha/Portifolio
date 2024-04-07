<?php

namespace app\controllers;

class Admin {
    public function index(){
        $this->Auth();

        if(!isset($_SESSION['auth'])){
            return [
                "view" => "admin/admin-login.view.php"
            ];
        }

        return [
            "view" => "admin/admin-index.view.php",
            "data" => [
                "title" => "Admin"
            ]
        ];
    }

    public function edit(){ 
        if(!isset($_SESSION['auth'])){
            header('Location: /');
        }

        return [
            //"view" => "home.view.php"
        ];
    }

    public function Auth(){
        $sql = "SELECT * FROM tb_admin";
        $senha = $GLOBALS['connection']->Select($sql)[0];

        if (isset($_POST['senha']) && password_verify($_POST['senha'], $senha->cd_senha)){
            $_SESSION['auth'] = true;
        } else {
            unset($_SESSION['auth']);
        }
    }
}
