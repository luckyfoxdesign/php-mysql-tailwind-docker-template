<?php
include "connect.php";

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader([
    './templates',
]);

$twig = new \Twig\Environment($loader, [
    'cache' => './templates/cache/',
    'debug' => true,
]);

echo $twig->render('index.twig', []);