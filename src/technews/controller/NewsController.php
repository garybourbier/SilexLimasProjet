<?php
namespace technews\controller;

class NewsController
{
    public function indexAction(){
        return '<h1>Accueil</h1>';
    }

    public function categorieAction($libellecategorie){
        return "<h1>Catégorie $libellecategorie</h1>";
    }

    public function articleAction($libellecategorie, $slugarticle, $idarticle){
        return "<h1>Article n° $idarticle | $slugarticle</h1>";
    }

    public function adminAction(){
        return "<h1>Page de connexion / Inscription Administrateur</h1>";
    }

    public function adminAction2(){
        return "<h1>Page d'ajout d'article / Administrateur</h1>";
    }

}
?>