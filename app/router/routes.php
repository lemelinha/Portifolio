<?php

return [
    '/' => 'Home@index',
    '/admin' => 'Admin@index',
    '/admin/add' => 'Admin@addProject',
    '/admin/edit/[0-9]+' => 'Admin@editProject',
    '/admin/edit/admin' => 'Admin@editAdmin',
    '/logout' => 'Admin@logout'
];
