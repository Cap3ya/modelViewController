<?php
// Initialiser les librairies de composer
require_once 'vendor/autoload.php';

// Create a Twig environment
$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader);