<?php

namespace App;

use App;

class Mysql
{
	private $db_host;
	private $db_login;
	private $db_passwd;
	private $db_name;
	private $mysqli;


	public function __construct() {
		$config = new Config();
		$this->db_host = $config->getHost();
		$this->db_login = $config->getLogin();
		$this->db_passwd = $config->getPasswd();
		$this->db_name = $config->getName();

		$this->mysqli = mysqli_connect($this->db_host, $this->db_login, $this->db_passwd, $this->db_name);
	}

	public function query($query, $type, $num)
	{
		if ($q = mysqli_query($this->mysqli, $query)) {
			switch ($type) {
				case 'num_row':
					return mysqli_num_rows($q);
					break;
				case 'result':
					$field = 0;
					mysqli_field_seek($q, 1);
					$row = mysqli_fetch_array($q, MYSQLI_BOTH);
					return (!is_array($row) || !isset($row[$field])) ? false : $row[$field];
					// return mysqli_result($q, $num);
					break;
				case 'accos':
					return mysqli_fetch_assoc($q);
					break;
				case 'none':
					return $q;
				default:
					return $q;
			}
		} else {
			return false;
		}
	}
	
	public function screening($data)
	{
		$data = trim($data); //~ удаление пробелов из начала и конца строки
		return $this->mysqli->real_escape_string($data); //~ экранирование символов
	}
}
