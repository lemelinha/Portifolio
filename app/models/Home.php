<?php

namespace app\models;

class Home {
    public function listProjects(){
        $sql = "
            SELECT p.cd_projeto, p.nm_projeto, p.ds_projeto, p.lk_github, p.lk_expo, p.lk_online
            FROM tb_projeto as p
            ";
        $projects = $GLOBALS['connection']->Select($sql);

        $sql = "
            SELECT i.cd_imagem, i.nm_caminho,ip.id_projeto
            FROM tb_imagem as i inner join tb_imagem_tb_projeto as ip
            on i.cd_imagem = ip.id_imagem
        ";
        $images = $GLOBALS['connection']->Select($sql);

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
            if(!isset($imagesArray[$image->id_projeto])){
                $imagesArray[$image->id_projeto] = [];
            }

            $imageSearch = 'http://localhost:5000/' . ($image->nm_caminho);

            array_push($imagesArray[$image->id_projeto], $imageSearch);
        }

        return [$projects, $imagesArray];
    }

    public function getAdminInfos(){
        return;
    }
}
