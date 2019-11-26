<?php

namespace Controllers;

class Home extends \App\Controller {

    public function index() {
        $this->title = 'Хатха йога в современном мире';
        $this->description = 'Информация о практике и философии йоги. Практические рекомендации и уроки. Статьи и заметки.';
        $params = array();
        $params[articles] = $this->model->getArticles();

        return $this->render('Home', $params);
    }
        
}
