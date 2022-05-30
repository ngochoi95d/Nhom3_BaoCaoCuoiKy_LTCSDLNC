<?php 

class Sale
{ 
	public $id_khuyenmai; 
	public $tenkhuyenmai; 
	public $giakhuyenmai;
	public $phantram;
  
	
	function __construct($id_khuyenmai,$tenkhuyenmai,$giakhuyenmai,$phantram) 
	{ 
	$this->id_khuyenmai = $id_khuyenmai;
    $this->tenkhuyenmai = $tenkhuyenmai;
    $this->giakhuyenmai = $giakhuyenmai;
	$this->phantram =$phantram;


		
	} 
static function show() 
	{ 
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('SELECT * FROM khuyenmai'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Sale($item['id_khuyenmai'], $item['tenkhuyenmai'], $item['giakhuyenmai'],$item['phantram']); 
		} 
		return $list; 
	} 

static function checkupdate() 
	{ 
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('SELECT * FROM khuyenmai WHERE id_khuyenmai = '.$_GET['id_khuyenmai'].''); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Sale($item['id_khuyenmai'], $item['tenkhuyenmai'], $item['giakhuyenmai'],$item['phantram']); 
		} 
		return $list; 
	}

static function insert() 
	{
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('INSERT INTO khuyenmai (tenkhuyenmai, giakhuyenmai, phantram) VALUES ("'.$_POST['insertkm'].'", "'.$_POST['insertgiakm'].'", "'.$_POST['insertptram'].'")'); 
		$req = $db->query('SELECT * FROM khuyenmai'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Sale($item['id_khuyenmai'], $item['tenkhuyenmai'], $item['giakhuyenmai'],$item['phantram']); 
			header("location:index.php?controller=sale&action=index");
		
		} 
		return $list; 
	}



static function update($id_khuyenmai) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('UPDATE khuyenmai SET tenkhuyenmai = "'.$_POST['tenkhuyenmai'].'",giakhuyenmai = "'.$_POST['giakhuyenmai'].'",phantram = "'.$_POST['phantram'].'" WHERE id_khuyenmai = :id_khuyenmai');
		$req->execute(array('id_khuyenmai' => $id_khuyenmai));
		$req = $db->query('SELECT * FROM  khuyenmai'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Sale($item['id_khuyenmai'], $item['tenkhuyenmai'], $item['giakhuyenmai'],$item['phantram']);
			header("location:index.php?controller=sale&action=index"); 
		} 
		return $list; 
	}

static function delete($id_khuyenmai) 
	{
		$list = []; 
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM khuyenmai WHERE id_khuyenmai = :id_khuyenmai');
		$req->execute(array('id_khuyenmai' => $id_khuyenmai));
		$req = $db->query('SELECT * FROM khuyenmai');
		foreach ($req->fetchAll() as $item) 
		{ 
      $list[] = new Sale($item['id_khuyenmai'], $item['tenkhuyenmai'], $item['giakhuyenmai'],$item['phantram']);
	  header("location:index.php?controller=sale&action=index"); 
		} 
		return $list; 
	}
  	

}