<?php

namespace App;

use App;

class Model {
    public $auth;

    public function __construct() {
        $this->auth = new Auth;
    }
    
    private function getJson($fileName) {
        $file = file_get_contents($fileName);
        $result = json_decode($file, true);
        unset($file);

        return $result;
    }

    public function getShedule() {
        return $this->getJson('./shedule.json');
    }
    public function getArticles() {
        return $this->getJson('./articles.json');
    }
    public function getArticle($name) {
        $articles = $this->getJson('./articles.json');
        foreach ($articles as $article) {
            if ($article[article][button] == $name) return $article[article];
        }
        return;
    }

    public function logout() {
        Session::destroy();
        header('Location: /Login');
        exit();
    }
}
