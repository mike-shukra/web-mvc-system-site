<?php

namespace Controllers;

class Recovery extends \App\Controller {

    public function index() {

        return $this->render('Recovery');
    }
    
    public function run() {
        $params = array();
        $auth = $this->auth;
        if($auth->recovery_pass($_POST['login'], $_POST['mail']) == 'good')
            return $this->render('RecoveryTrue');
        $params[error] = $_SESSION['error'];
        return $this->render('Recovery', $params);
    }

}
