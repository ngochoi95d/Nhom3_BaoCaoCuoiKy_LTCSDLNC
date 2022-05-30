<?php

class Bill
{
	public $id_giohang;
	public $mahoadon;
	public $username;
	public $diachi;
	public $phone;
	public $email;
	public $giaohang;
	public $thanhtoan;
	public $tinhtrang;

	function __construct($id_giohang, $mahoadon, $username, $diachi, $phone, $email, $giaohang, $thanhtoan, $tinhtrang)
	{
		$this->id_giohang = $id_giohang;
		$this->mahoadon = $mahoadon;
		$this->username = $username;
		$this->diachi = $diachi;
		$this->phone = $phone;
		$this->email = $email;
		$this->giaohang = $giaohang;
		$this->thanhtoan = $thanhtoan;
		$this->tinhtrang = $tinhtrang;
	}
	static function showbill()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query('SELECT * FROM giohang');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Bill(
				$item['id_giohang'],
				$item['mahoadon'],
				$item['username'],
				$item['diachi'],
				$item['phone'],
				$item['email'],
				$item['giaohang'],
				$item['thanhtoan'],
				$item['tinhtrang']
			);
		}
		return $list;
	}

	static function delete($id_giohang)
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM giohang WHERE id_giohang = :id_giohang');
		$req->execute(array('id_giohang' => $id_giohang));
		$req = $db->query('SELECT * FROM giohang');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Bill(
				$item['id_giohang'],
				$item['mahoadon'],
				$item['username'],
				$item['diachi'],
				$item['phone'],
				$item['email'],
				$item['giaohang'],
				$item['thanhtoan'],
				$item['tinhtrang']
			);
			header("location:index.php?controller=bill&action=listbill");
		}
		return $list;
	}
	static function status($mahoadon)
	{
		
			$db = DB::getInstance();
			$req = $db->query('UPDATE giohang SET tinhtrang=0 WHERE mahoadon = '.$mahoadon.'');
			header("location:index.php?controller=bill&action=listbill");
		
	}
}