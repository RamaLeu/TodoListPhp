<?php
$router->define([
    'taskmanager'=> 'controllers/home.php',
    'taskmanager/add-task'=> 'controllers/add-task.php',
    '404'=> 'controllers/404.php',
    'taskmanager/complete-task'=> 'controllers/complete-task.php',
    'taskmanager/delete-task'=> 'controllers/delete-task.php'
]);