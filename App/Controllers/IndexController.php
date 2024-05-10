<?php

namespace App\Controllers;
use Needs\Controller\Controller;
use App\Models\Index;

class IndexController extends Controller {
    public function index(){
        $IndexModel = new Index();
        [$this->projects, $this->images] = $IndexModel->listProjects();
        $this->adminInfo = $IndexModel->getAdminInfo();

        $this->render('index', '');
    }
}
