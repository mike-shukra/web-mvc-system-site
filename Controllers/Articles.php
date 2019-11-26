<?php

namespace Controllers;

class Articles extends \App\Controller {

    public function index() {
        $this->title = 'Статьи';
        $this->description = 'Статьи на тему практики и философии йоги и около неё.';
        $this->menuActiveItem = 'articles';
        $params = array();
        $params[header] = 'Статьи';
        $params[articles] = $this->model->getArticles();
        
        return $this->render('Articles', $params);
    }
    
    public function aboutYogiBhajan() {
        $this->menuActiveItem = 'articles';

        $params = array();
        $params[article] = $this->model->getArticle('aboutYogiBhajan');
        
        return $this->render('Article', $params);
    }
    public function whatYouWantFromYoga() {
        $this->menuActiveItem = 'articles';

        $params = array();
        $params[article] = $this->model->getArticle('whatYouWantFromYoga');
        
        return $this->render('Article', $params);
    }
    public function instructor() {
        $this->menuActiveItem = 'articles';

        $params = array();
        $params[article] = $this->model->getArticle('instructor');
        
        return $this->render('Article', $params);
    }
    public function mulaBandha() {
        $this->menuActiveItem = 'articles';

        $params = array();
        $params[article] = $this->model->getArticle('mulaBandha');
        
        return $this->render('Article', $params);
    }
    
}
