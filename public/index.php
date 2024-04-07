<?php

require 'bootstrap.php';

try {
    $data = router();

    extract($data['data']??[]);

    if(!isset($data['view'])){
        throw new Exception("View Não Especificada");
    }

    if(!file_exists(VIEW_PATH . $data['view'])){
        throw new Exception("View {$data['view']} não existe");
    }

    $view = $data['view'];
    
    $connection = new app\database\Connection($dbname='db_portifolio');

    require VIEW_PATH . $view;
} catch (Exception $e) {
    require VIEW_PATH . 'error.view.php';
    die();
}
