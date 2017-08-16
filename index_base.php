<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

////////////////////////////////////////////////////////////////////////////
// importation de l'autoload de composer
//il permet de charger toute les dépendence du projet de maniere automatique 
//exemple : Symphony , Pimple, Silex, etc ....
////////////////////////////////////////////////////////////////////////////


require_once __DIR__.'/vendor/autoload.php';

//////////////////////////////////////
//Instanciation de l'application Sliex
//////////////////////////////////////

$app = new Application();

////////////////////////
//activation de débugage
//////////////////////// 

$app['debug'] = true;


$app->get('/', function(){
    return "<h1>Page d'accueil</h1>";
});

//////////////////////////////////////////////////
//j'enrengistre dans $app ma valeur prenom.default
//j'y accede ensuite de la meme facon 
//////////////////////////////////////////////////

$app['prenom.default'] = function(){
    return 'Nicolas';
};

//Dans Silex 
//1 si ma route est detecter par match 
//2 Alors ma function annonyme (closure - controller ) est executer
//3 une repnse HTML et un code status http est envoyer au navigateur.


$app->match('/hello/{prenom}', function($prenom){
    return new Response("<h1>Hello $prenom</h1>");
})->method('GET|POST')->value('prenom', $app['prenom.default']);

/////////////////////
//éxecution de Silex 
/////////////////////

$app->run();




?>



