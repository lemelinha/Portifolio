<?php

require 'bootstrap.php';
use app\database\Connection;

try {
    $connection = new Connection('localhost', 'db_portifolio', 'root', '');
    
    $data = router();

    extract($data['data']??[]);

    if(!isset($data['view'])){
        throw new Exception("View Não Especificada");
    }

    if(!file_exists(VIEW_PATH . $data['view'])){
        throw new Exception("View {$data['view']} não existe");
    }

    $view = $data['view'];
    

    require VIEW_PATH . $view;
} catch (Exception $e) {
    require VIEW_PATH . 'error.view.php';
    die();
}
