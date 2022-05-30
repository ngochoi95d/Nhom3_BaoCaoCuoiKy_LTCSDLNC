<?php

class Comment
{
	public $id_danhgia;
	public $danhgiasao;
	public $name;
	public $email;
	public $noidungdanhgia;
	public $id_sanpham;
	public $masanpham;
	function __construct($id_danhgia, $danhgiasao, $name, $email, $noidungdanhgia, $id_sanpham, $masanpham)
	{
		$this->id_danhgia = $id_danhgia;
		$this->danhgiasao = $danhgiasao;
		$this->name = $name;
		$this->email = $email;
		$this->noidungdanhgia = $noidungdanhgia;
		$this->id_sanpham = $id_sanpham;
		$this->masanpham = $masanpham;
	
	}


	static function showcomment()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query('SELECT * FROM danhgia,sanpham WHERE  danhgia.id_sanpham=sanpham.id_sanpham');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Comment(
				$item['id_danhgia'],
				$item['danhgiasao'],
				$item['name'],
				$item['email'],
				$item['noidungdanhgia'],
				$item['id_sanpham'],
				$item['masanpham']

			);
		}
		return $list;
	}
	static function delete($id_danhgia)
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM danhgia WHERE id_danhgia = :id_danhgia');
		$req->execute(array('id_danhgia' => $id_danhgia));
		$req = $db->query('SELECT * FROM danhgia');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Comment(
				$item['id_danhgia'],
				$item['danhgiasao'],
				$item['name'],
				$item['email'],
				$item['noidungdanhgia'],
				$item['id_sanpham'],
				$item['masanpham']
			);
			
		}header("location:index.php?controller=comment&action=index");

		return $list;
	}
}