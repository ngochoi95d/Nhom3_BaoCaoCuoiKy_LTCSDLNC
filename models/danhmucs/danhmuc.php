<?php 

class Showdanhmuc 
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

static function Showall() 
	{ 
		$list = []; 
		$db = DB::getInstance(); 
		$req = $db->query('SELECT * FROM danhmuc'); 
		foreach ($req->fetchAll() as $item) 
		{ 
			$list[] = new Showdanhmuc($item['id_danhmuc'], $item['tendanhmuc'], $item['thutu']); 
		} 
		return $list; 
	} 

  
}