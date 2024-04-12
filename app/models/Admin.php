<?php

namespace app\models;

class Admin {
    public function addProject(){
        $sql = "
            insert into tb_projeto values
            (default, ?, ?, ?, ?, ?)
        ";
        $params = [
            $_POST['titulo'],
            $_POST['descricao'],
            $_POST['github']??null,
            $_POST['expo']??null,
            $_POST['online']??null
        ];

        try {
            $GLOBALS['connection']->Insert($sql, $params);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editProject($id){
        $sql = "
                UPDATE tb_projeto
                SET
                    nm_projeto = ?,
                    ds_projeto = ?,
                    lk_github = ?,
                    lk_expo = ?,
                    lk_online = ?
                WHERE cd_projeto = ?
        ";
        $params = [
            $_POST['titulo'],
            $_POST['descricao'],
            $_POST['github'],
            $_POST['expo'],
            $_POST['online'],
            $id
        ];

        $GLOBALS['connection']->Update($sql, $params);
        header('Location: /admin');
    }
    
    public function getProjectInfo($id){
        $sql = "
                SELECT * FROM tb_projeto
                WHERE cd_projeto = ?
        ";
        $projectInfo = $GLOBALS['connection']->Select($sql, [$id])[0];
        return $projectInfo;
    }

    public function editAdminInfo(){
        $sql = "
                UPDATE tb_admin
                SET
                    ds_sobre_mim = ?,
                    ds_tecnologias = ?,
                    lk_github = ?,
                    lk_linkedin = ?
                WHERE cd_admin = 1
        ";
        $params = [
            $_POST['sobre-mim'],
            $_POST['tecnologias'],
            $_POST['github'],
            $_POST['linkedin']
        ];
        $GLOBALS['connection']->Update($sql, $params);
        header('Location: /admin');
    }
    
    public function getAdminInfo(){
        $sql = "
                SELECT ds_sobre_mim, ds_tecnologias, lk_github, lk_linkedin FROM tb_admin
        ";
        $adminInfo = $GLOBALS['connection']->Select($sql)[0];

        return $adminInfo;
    }

    public function deleteProject(){
        return;
    }

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
}
