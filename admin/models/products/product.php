<?php

class Product
{
	public $id_sanpham;
	public $masanpham;
	public $tensanpham;
	public $gia;
	public $soluong;
	public $hinh;
	public $hinh1;
	public $hinh2;
	public $hinh3;
	public $mota;
	public $tinhtrang;
	public $id_danhmuc;
	public $id_khuyenmai;
	public $tenkhuyenmai;
	public $tendanhmuc;
	//,id_danhmuc,id_khuyenmai

	function __construct($id_sanpham, $masanpham, $tensanpham, $gia, $soluong, $hinh, $hinh1, $hinh2, $hinh3, $mota, $tinhtrang, $id_danhmuc, $id_khuyenmai, $tenkhuyenmai, $tendanhmuc)
	{
		$this->id_sanpham =  $id_sanpham;
		$this->masanpham = $masanpham;
		$this->tensanpham = $tensanpham;
		$this->gia = $gia;
		$this->soluong = $soluong;
		$this->hinh = $hinh;
		$this->hinh1 = $hinh1;
		$this->hinh2 = $hinh2;
		$this->hinh3 = $hinh3;
		$this->mota = $mota;
		$this->tinhtrang = $tinhtrang;
		$this->id_danhmuc = $id_danhmuc;
		$this->id_khuyenmai = $id_khuyenmai;
		$this->tenkhuyenmai = $tenkhuyenmai;
		$this->tendanhmuc = $tendanhmuc;
	}

	static function all()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM sanpham,khuyenmai,danhmuc WHERE sanpham.id_khuyenmai=khuyenmai.id_khuyenmai AND sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham DESC ");
		foreach ($req->fetchAll() as $item) {
			$list[] = new Product(
				$item['id_sanpham'],
				$item['masanpham'],
				$item['tensanpham'],
				$item['gia'],
				$item['soluong'],
				$item['hinh'],
				$item['hinh1'],
				$item['hinh2'],
				$item['hinh3'],
				$item['mota'],
				$item['tinhtrang'],
				$item['id_danhmuc'],
				$item['id_khuyenmai'],
				$item['tenkhuyenmai'],
				$item['tendanhmuc']
			);
		}
		return $list;
	}




	static function insert()
	{
		$list = [];
		$db = DB::getInstance();
		$masanpham = $_POST['insertmsp'];
		$tensanpham = $_POST['inserttensanpham'];
		$gia = $_POST['insertgia'];
		$soluong = $_POST['insertsoluong'];

		// xu lý hinh ảnh 
		$hinhanh = $_FILES['hinh']['name'];
		$hinhanh_tmp = $_FILES['hinh']['tmp_name'];
		$hinh = $_POST['hinh'];
		// xu ly hinh anh 1
		$hinhanh = $_FILES['hinh1']['name'];
		$hinhanh_tmp = $_FILES['hinh1']['tmp_name'];
		$hinh1 = $_POST['hinh1'];
		// xu ly hinh anh 2
		$hinhanh = $_FILES['hinh2']['name'];
		$hinhanh_tmp = $_FILES['hinh2']['tmp_name'];
		$hinh2 = $_POST['hinh2'];
		// xu ly hinh anh 3
		$hinhanh = $_FILES['hinh3']['name'];
		$hinhanh_tmp = $_FILES['hinh3']['tmp_name'];
		$hinh3 = $_POST['hinh3'];


		$mota = $_POST['insertmota'];
		$tinhtrang = $_POST['inserttinhtrang'];
		$id_danhmuc = $_POST['insertdanhmuc'];
		$id_khuyenmai = $_POST['insertkhuyenmai'];
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinh);
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinh1);
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinh2);
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinh3);


		$req = $db->query("INSERT INTO sanpham (masanpham,tensanpham,gia,soluong,hinh,hinh1,hinh2,hinh3,mota,tinhtrang,id_danhmuc,id_khuyenmai) VALUE('" . $masanpham . "','" . $tensanpham . "','" . $gia . "','" . $soluong . "','" . $hinh . "','" . $hinh1 . "','" . $hinh2 . "','" . $hinh3 . "','" . $mota . "','" . $tinhtrang . "','" . $id_danhmuc . "','" . $id_khuyenmai . "')");
		$req = $db->query('SELECT * FROM sanpham');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Product(
				$item['id_sanpham'],
				$item['masanpham'],
				$item['tensanpham'],
				$item['gia'],
				$item['soluong'],
				$item['hinh'],
				$item['hinh1'],
				$item['hinh2'],
				$item['hinh3'],
				$item['mota'],
				$item['tinhtrang'],
				$item['id_danhmuc'],
				$item['id_khuyenmai'],
				$item['tenkhuyenmai'],
				$item['tendanhmuc']
			);
			header("location:index.php?controller=product&action=index");
		}
		return $list;
	}

	static function update($id_sanpham)
	{
		$list = [];
		$db = DB::getInstance();
		// xu lý hinh ảnh 
		$hinhanh = $_FILES['hinh']['name'];
		$hinhanh_tmp = $_FILES['hinh']['tmp_name'];
		$hinh = $_POST['hinh'];
		// xu ly hinh anh 1
		$hinhanh = $_FILES['hinh1']['name'];
		$hinh1_tmp = $_FILES['hinh1']['tmp_name'];
		$hinh1 = $_POST['hinh1'];
		// xu ly hinh anh 2
		$hinhanh = $_FILES['hinh2']['name'];
		$hinh2_tmp = $_FILES['hinh2']['tmp_name'];
		$hinh2 = $_POST['hinh2'];
		// xu ly hinh anh 3
		$hinhanh = $_FILES['hinh3']['name'];
		$hinh3_tmp = $_FILES['hinh3']['tmp_name'];
		$hinh3 = $_POST['hinh3'];
		move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinh);
		move_uploaded_file($hinh3_tmp, 'uploads/' . $hinh1);
		move_uploaded_file($hinh2_tmp, 'uploads/' . $hinh2);
		move_uploaded_file($hinh1_tmp, 'uploads/' . $hinh3);
		$req = $db->prepare('UPDATE sanpham SET masanpham = "' . $_POST['masanpham'] . '", tensanpham = "' . $_POST['tensanpham'] . '", gia = "' . $_POST['gia'] . '", soluong = "' . $_POST['soluong'] . '" , hinh = "' . $_POST['hinh'] . '" , hinh1 = "' . $_POST['hinh1'] . '", hinh2 = "' . $_POST['hinh2'] . '", hinh3 = "' . $_POST['hinh3'] . '" , mota = "' . $_POST['mota'] . '", tinhtrang = "' . $_POST['tinhtrang'] . '", id_danhmuc = "' . $_POST['id_danhmuc'] . '", id_khuyenmai = "' . $_POST['id_khuyenmai'] . '"  WHERE id_sanpham = :id_sanpham');
		$req->execute(array('id_sanpham' => $id_sanpham));
		$req = $db->query('SELECT * FROM sanpham');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Product(
				$item['id_sanpham'],
				$item['masanpham'],
				$item['tensanpham'],
				$item['gia'],
				$item['soluong'],
				$item['hinh'],
				$item['hinh1'],
				$item['hinh2'],
				$item['hinh3'],
				$item['mota'],
				$item['tinhtrang'],
				$item['id_danhmuc'],
				$item['id_khuyenmai'],
				$item['tenkhuyenmai'],
				$item['tendanhmuc']
			);
			header("location:index.php?controller=product&action=index");
		}
		return $list;
	}
	static function checkupdate()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query('SELECT * FROM sanpham,khuyenmai,danhmuc WHERE id_sanpham = ' . $_GET['id_sanpham'] . ' LIMIT 1');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Product(
				$item['id_sanpham'],
				$item['masanpham'],
				$item['tensanpham'],
				$item['gia'],
				$item['soluong'],
				$item['hinh'],
				$item['hinh1'],
				$item['hinh2'],
				$item['hinh3'],
				$item['mota'],
				$item['tinhtrang'],
				$item['id_danhmuc'],
				$item['id_khuyenmai'],
				$item['tenkhuyenmai'],
				$item['tendanhmuc']
			);
		}
		return $list;
	}

	static function delete($id_sanpham)
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->prepare('DELETE FROM sanpham WHERE id_sanpham = :id_sanpham');
		$req->execute(array('id_sanpham' => $id_sanpham));
		$req = $db->query('SELECT * FROM sanpham');
		foreach ($req->fetchAll() as $item) {
			$list[] = new Product(
				$item['id_sanpham'],
				$item['masanpham'],
				$item['tensanpham'],
				$item['gia'],
				$item['soluong'],
				$item['hinh'],
				$item['hinh1'],
				$item['hinh2'],
				$item['hinh3'],
				$item['mota'],
				$item['tinhtrang'],
				$item['id_danhmuc'],
				$item['id_khuyenmai'],
				$item['tenkhuyenmai'],
				$item['tendanhmuc']
			);
			header("location:index.php?controller=product&action=index");
		}
		return $list;
	}
}
