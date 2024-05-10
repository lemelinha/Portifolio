<?php

namespace App;

abstract class Router {
    protected function declareRoutes(){
        $routes['Index'] = [
            'router' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $this->routes = $routes;
    }
}