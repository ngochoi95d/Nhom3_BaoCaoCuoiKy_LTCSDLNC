<?php 

class Admin
{ 
	static function login() 
	{
		$db = DB::getInstance(); 
		$username = $_POST['username'];
		$password = $_POST['password'];
		$req = $db->query("SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'  "); 
		$count = $req->rowCount();
		return $count;
	} 

}
