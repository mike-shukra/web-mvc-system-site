<?php

namespace Controllers;

class Login extends \App\Controller
{
    public function index()
    {
        $this->menuActiveItem = '';

        if (\App\Auth::check())
            return $this->render('LoginTrue');
        else
            return $this->render('Login');
    }
    
    public function run(){
        $params = array();
        // $auth = new \App\Auth;
        $auth = $this->auth;
        if($auth->authorization())
            return $this->render('LoginTrue', $params);
        else {
            $params[error] = $_SESSION['error'];
            return $this->render('Login', $params);
        }
    }

    public function out(){
        $auth = $this->auth;
        $auth->exit_user();

        return $this->render('Login');
    }
}
