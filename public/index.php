<?php

use Silex\Application;
use technews\controller\provider\NewsControllerProvider;

//importation de l'autolader
require_once __DIR__.'/../vendor/autoload.php';

//Instanciation de l'application Sliex


$app = new Application();

////////////////////////
//activation de débugage
//////////////////////// 

$app['debug'] = true;

//////////////////////////////////////////////////
//Gestion de nos controller via ControllerProvider
//////////////////////////////////////////////////
$app->mount('/', new NewsControllerProvider());

//execution de l'application 
$app->run();

?>