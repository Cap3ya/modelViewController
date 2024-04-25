<?php

require_once 'config/init.php';

require 'controller/header.php';
require 'controller/home.php';

// $routes = [
//     "/" => "controller/home.php",
//     "create" => "controller/create.php",
//     "read" => "controller/read.php",
//     "update" => "controller/update.php",
//     "delete" => "controller/delete.php",
// ];

// $controller = $_GET['action'] ?? '/';

// if (array_key_exists($controller, $routes)) {
//     require $routes[$controller];
// } else {
//     require 'view/error.php';
// }

require 'controller/footer.php';
