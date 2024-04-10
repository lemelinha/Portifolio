<?php

namespace app\models;

class Admin {
    public function verifyLogin(){
        $userPwd = $_POST['senha']??null;

        $sql = "
            SELECT a.cd_senha from tb_admin as a
        ";
        $adminPwd = $GLOBALS['connection']->Select($sql)[0]->cd_senha;

        if (isset($_SESSION['auth']) && $_SESSION['auth']){
            return true;
        }

        if (!isset($userPwd)){
            return false;
        }

        if (password_verify($userPwd, $adminPwd)){
            $_SESSION['auth'] = true;
            return true;
        }

        unset($_SESSION['auth']);
        return false;
    }

    public function editProject(){
        return;
    }

    public function editAdminInfo(){
        return;
    }

    public function deleteProject(){
        return;
    }
}
