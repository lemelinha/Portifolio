<?php

namespace App\Models;
use Needs\Model\Model;

class Index extends Model {
    public function listProjects(){
        $sql = "
            SELECT 
                p.cd_projeto as codigo, 
                p.nm_projeto as nome,
                p.ds_projeto as descricao, 
                p.lk_github as github, 
                p.lk_expo as expo, 
                p.lk_online as online
            FROM 
                tb_projeto as p
            ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $projects = $query->fetchAll();


        $sql = "
            SELECT 
                i.cd_imagem as codigo, 
                i.nm_caminho as caminho,
                ip.id_projeto as codigo_projeto
            FROM 
                tb_imagem as i 
            INNER JOIN 
                tb_imagem_tb_projeto as ip
            ON 
                i.cd_imagem = ip.id_imagem
        ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $images = $query->fetchAll();

        // formatando o array com os indices respectivos
        for($i=sizeof($projects); $i>0; $i--){
            $projects[$i] = $projects[$i-1];
        }
        unset($projects[0]);
        for($i=sizeof($images); $i>0; $i--){
            $images[$i] = $images[$i-1];
        }
        unset($images[0]);
        
        // array dos caminhos das imagens com os indices sendo o id do projeto
        $imagesArray = [];
        foreach($images as $id => $image){
            if(!isset($imagesArray[$image->codigo_projeto])){
                $imagesArray[$image->codigo_projeto] = [];
            }

            $imageSearch = $image->caminho;

            array_push($imagesArray[$image->codigo_projeto], $imageSearch);
        }

        return [$projects, $imagesArray];
    }

    public function getAdminInfo(){
        $sql = "
            SELECT 
                a.cd_caminho_curriculo as curriculo, 
                a.ds_sobre_mim as sobre_mim,
                a.ds_tecnologias as tecnologias,
                a.cd_caminho_pfp as pfp,
                a.lk_github as github,
                a.lk_linkedin as linkedin
            FROM 
                tb_admin as a
        ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $adminInfo = $query->fetchAll()[0];

        return $adminInfo;
    }
}
