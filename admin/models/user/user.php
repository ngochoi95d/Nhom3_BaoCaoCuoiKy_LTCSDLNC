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

	function __construct($id_user, $username, $password,$diachi,$phone,$avatar,$email) 
	{ 
		$this->id_user= $id_user; 
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
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new User($item['id_user'], $item['username'], $item['password'],$item['diachi'],$item['phone'],$item['avatar'],$item['email']); 
		} 
		return $list; 
	} 


	

static function insert() 
	{
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('INSERT INTO user (username,diachi,phone,avatar,email) VALUES ("'.$_POST['insertusername'].'", "'.$_POST['insertdiachi'].'", "'.$_POST['insertphone'].'", "'.$_POST['insertavatar'].'", "'.$_POST['insertemail'].'")'); 
		$req = $db->query('SELECT * FROM user'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new User($item['id_user'], $item['username'], $item['password'],$item['diachi'],$item['phone'],$item['avatar'],$item['email']); 
		} 
		return $list; 
	}




static function update($id_user) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('UPDATE user SET title = "'.$_POST['title'].'", content = "'.$_POST['content'].'"  WHERE id_user = :id_user');
		$req->execute(array('id_user' => $id_user));
		$req = $db->query('SELECT * FROM user'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new User($item['id_user'], $item['username'], $item['password'],$item['diachi'],$item['phone'],$item['avatar'],$item['email']); 
		} 
		return $list; 
	}
	
	static function delete($id_user) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM user WHERE id_user = :id_user');
		$req->execute(array('id_user' => $id_user));
		$req = $db->query('SELECT * FROM user');
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new User($item['id_user'], $item['username'], $item['password'],$item['diachi'],$item['phone'],$item['avatar'],$item['email']); 
		} 
		return $list; 
	}
  
}
