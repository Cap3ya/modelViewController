<?php

use Afpa\Repository\OffreDAO;

$title = "Hello, World!";
$offres = (new OffreDAO())->getAll();

echo $twig->render(
    'home.html.twig',
    [
        "title" => $title,
        "offres" => $offres, 
    ]
);
