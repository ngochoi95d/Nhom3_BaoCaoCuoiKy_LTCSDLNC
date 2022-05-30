<?php

class User
{
	public $id_user;
	public $username;
	public $password;
	public $diachi;
	public $phone;
	public $avatar;
	public $email;

	function __construct($id_user, $username, $password, $diachi, $phone, $avatar, $email)
	{
		$this->id_user = $id_user;
		$this->username = $username;
		$this->password = $password;
		$this->diachi = $diachi;
		$this->phone = $phone;
		$this->avatar = $avatar;
		$this->email = $email;
	}

	static function all()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query('SELECT * FROM user');
		foreach ($req->fetchAll() as $item) {
			$list[] = new User($item['id_user'], $item['username'], $item['password'], $item['diachi'], $item['phone'], $item['avatar'], $item['email']);
		}
		return $list;
	}

	static function checkEmail($email) {
		$db = DB::getInstance();
		$req = $db->query("SELECT email FROM user WHERE email = '" . $email . "'");
		$count = $req->rowCount();
		if ($count > 0) return true;
		else return false;
	}

	static function insertItem($username, $password, $diachi, $sdt, $email)
	{
		$db = DB::getInstance();
		$req = $db->query('INSERT INTO user (username,password,diachi,phone,email) VALUES ("' . $username . '", "' . $password . '", "' . $diachi . '", "' . $sdt . '", "' . $email . '")');
	}

	static function login($email, $password)
	{
		$db = DB::getInstance();
		$req = $db->query('SELECT * FROM user WHERE email = "' . $email . '" AND password="' . $password . '" ');
		$count = $req->rowCount();
		if ($count > 0) {
			foreach ($req->fetchAll() as $item) {
				$itemm = new User($item['id_user'], $item['username'], $item['password'], $item['diachi'], $item['phone'], $item['avatar'], $item['email']);
				return $itemm;
			}
		}
		return null;
	}

	static function getPass($email)
	{
		$db = DB::getInstance();
		$req = $db->query("SELECT password FROM user WHERE email='" . $email . " '");
		$count = $req->rowCount();
		if ($count == 1) {
			foreach ($req->fetchAll() as $item){
				return $item['password'];
			}
		}
		return 0;
	}
}


?>