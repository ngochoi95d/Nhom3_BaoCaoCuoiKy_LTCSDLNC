<?php 

class Danhmuc 
{ 
	public $id_danhmuc; 
	public $tendanhmuc; 
	public $thutu; 
	function __construct($id_danhmuc, $tendanhmuc, $thutu) 
	{ 
		$this->id_danhmuc = $id_danhmuc; 
		$this->tendanhmuc = $tendanhmuc; 
		$this->thutu = $thutu; 
	} 

static function all() 
	{ 
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('SELECT * FROM danhmuc'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
		} 
		return $list; 
	} 


static function checkupdate() 
	{ 
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('SELECT * FROM danhmuc WHERE id_danhmuc = '.$_GET['id_danhmuc'].' LIMIT 1'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
		} 
		return $list; 
	}


static function insert() 
	{
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('INSERT INTO danhmuc (tendanhmuc, thutu) VALUES ("'.$_POST['insertdm'].'", "'.$_POST['insertthutu'].'")'); 
		$req = $db->query('SELECT * FROM danhmuc'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
			header("location:index.php?controller=danhmuc&action=listdanhmuc");
		} 
		return $list; 
	}


static function update($id_danhmuc) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('UPDATE danhmuc SET tendanhmuc = "'.$_POST['tendanhmuc'].'", thutu = "'.$_POST['thutu'].'"  WHERE id_danhmuc = :id_danhmuc');
		$req->execute(array('id_danhmuc' => $id_danhmuc));
		$req = $db->query('SELECT * FROM danhmuc '); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
			header("location:index.php?controller=danhmuc&action=listdanhmuc");
		} 
		return $list; 
	}

	
static function delete($id_danhmuc) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM danhmuc WHERE id_danhmuc = :id_danhmuc');
		$req->execute(array('id_danhmuc' => $id_danhmuc));
		$req = $db->query('SELECT * FROM danhmuc');
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
			header("location:index.php?controller=danhmuc&action=listdanhmuc");
		} 
		return $list; 
	}
  
}



// static function find($id_danhmuc)
//   {
//     $db = DB::getInstance();
//     $req = $db->prepare('SELECT * FROM danhmuc WHERE id_danhmuc = :id_danhmuc');
//     $req->execute(array('id_danhmuc' => $id_danhmuc));
//     $item = $req->fetch();
//     if (isset($item['id_danhmuc'])) {
//       return new Danhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']);
//     }
//     return null;
//   }