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
    
    require VIEW_PATH . 'master.view.php';
} catch (Exception $e) {
    $view = 'error.view.php';
    require VIEW_PATH . 'master.view.php';
    die();
}
