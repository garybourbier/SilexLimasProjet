<?php

namespace technews\controller\provider;

use Silex\Api\ControllerProviderInterface;

class NewsControllerProvider implements ControllerProviderInterface {

    public function connect(\Silex\Application $app)
    {
        $controllers = $app['controllers_factory'];

        #Page d'accueil
        $controllers
            #on associe une route a un controller et une action 
            ->get('/', 'technews\controller\NewsController::indexAction')
            ->bind('technews_home');


        #Page categorie
        $controllers
            #on associe une route a un controller et une action 
            ->get('/categorie/{libellecategorie}', 'technews\controller\NewsController::categorieAction')
            ->assert('libellecategorie', '[^/]+')
            ->value('libellecategorie', 'computer')
            ->bind('technews_categorie');

        #Page article
        $controllers
            #on associe une route a un controller et une action 
            ->get('/{libellecategorie}/{slugarticle}_{idarticle}.html', 'technews\controller\NewsController::articleAction')
            ->assert('idarticle', '\d+')
            ->bind('technews_article');

        #Page admin inscription
        $controllers
            #on associe une route a un controller et une action 
            ->get('/admin/connexion.html', 'technews\controller\NewsController::adminAction')
            ->bind('technews_admin');

        #Page admin ajouter un article
        $controllers
            #on associe une route a un controller et une action 
            ->get('/admin/addArticle.html', 'technews\controller\NewsController::adminAction2')
            ->bind('technews_adminAddArticle');



        //je return la liste des controller
        return $controllers;

    }

};






?>