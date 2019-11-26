<?php

namespace App;

use App;

class Config {
    private $db_host;
	private $db_login;
	private $db_passwd;
	private $db_name;

    public function __construct()
    {
        $this->db_host = '****';
        $this->db_login = '****';
        $this->db_passwd = '****';
        $this->db_name = '****';
    }

    public function getHost(){
        return $this->db_host;
    }
    public function getLogin(){
        return $this->db_login;
    }
    public function getPasswd(){
        return $this->db_passwd;
    }
    public function getName(){
        return $this->db_name;
    }

}
?>