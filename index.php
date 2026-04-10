<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//todo gérer le coeur de l'appli en POO
//Chargement du moteur de template Smarty
require_once('libs/Smarty.class.php');
$smarty = new \Smarty\Smarty;

$smarty->setTemplateDir('Views/templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('Views/configs/');
$smarty->setCacheDir('Views/cache/');

// Router
require_once __DIR__ . '/core/Router.php';

$router = new Router($smarty);
$router->handleRequest();
 