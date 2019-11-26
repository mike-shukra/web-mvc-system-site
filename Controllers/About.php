<?php

namespace Controllers;

class About extends \App\Controller {

    public function index() {
        $this->title = 'О проекте YOGA';
        $this->description = 'Личный сайт. Субъективное мнение автора.';
        $this->menuActiveItem = 'about';
        $params = array();
        
        // if (\App\Session::get('loggedIn') == true) 
        //     $params[auth] = true;

        return $this->render('About', $params);
    }
    
}
