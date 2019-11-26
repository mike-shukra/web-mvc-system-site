<?php

namespace Controllers;

class Join extends \App\Controller
{
    public function index()
    {
        $this->menuActiveItem = '';

        return $this->render('Join');
    }
    
    public function run(){
        $params = array();
        $auth = $this->auth;
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];
        $passwd2 = $_POST['passwd2'];
        $mail = $_POST['mail'];
        if($auth->reg($login, $passwd, $passwd2, $mail))
            return $this->render('JoinTrue', $params);
        else {
            $params[error] = $_SESSION['error'];
            return $this->render('Join', $params);
        }
    }
}
