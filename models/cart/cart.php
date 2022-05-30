<?php

class Cart
{
	static function insertcart()
	{
		session_start();
		if (isset($_POST['themgiohang'])) {
			// session_destroy();
			$id = $_GET['idsanpham'];
			$soluong = 1;
			$db = DB::getInstance();
			$req = $db->query('SELECT * FROM sanpham WHERE id_sanpham = ' . $id . ' LIMIT 1');
			foreach ($req->fetchAll() as $row) {
				if ($row) {
					$new_product = array(array(
						'tensanpham' => $row['tensanpham'],
						'id' => $id,
						'soluong' => $soluong,
						'gia' => $row['gia'],
						'hinh' => $row['hinh'],
						'masanpham' => $row['masanpham']
					));
					if (isset($_SESSION['cart'])) {
						$found = false;
						foreach ($_SESSION['cart'] as $cart_item) {
							//nếu dữ liều trùng
							if ($cart_item['id'] == $id) {
								$product[] = array(
									'tensanpham' => $cart_item['tensanpham'],
									'id' => $cart_item['id'],
									'soluong' => $soluong + 1,
									'gia' => $cart_item['gia'],
									'hinh' => $cart_item['hinh'],
									'masanpham' => $cart_item['masanpham']
								);
								$found = true;
							} else {
								//neu du lieu khong trung
								$product[] = array(
									'tensanpham' => $cart_item['tensanpham'],
									'id' => $cart_item['id'],
									'soluong' => $cart_item['soluong'],
									'gia' => $cart_item['gia'],
									'hinh' => $cart_item['hinh'],
									'masanpham' => $cart_item['masanpham']
								);
							}
						}
						if ($found == false) {
							//lien ket du lieu new_product voi product
							$_SESSION['cart'] = array_merge($product, $new_product);
						} else {
							$_SESSION['cart'] = $product;
						}
					} else {
						$_SESSION['cart'] = $new_product;
					}
				}
			}
		}
		header('Location:index.php?controller=cart&action=insetcar');
	}
	static function deletecart()
	{

		session_start();
		if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
			$id = $_GET['xoa'];
			foreach ($_SESSION['cart'] as $cart_item) {

				if ($cart_item['id'] != $id) {
					$product[] = array(
						'tensanpham' => $cart_item['tensanpham'],
						'id' => $cart_item['id'],
						'soluong' => $cart_item['soluong'],
						'gia' => $cart_item['gia'],
						'hinh' => $cart_item['hinh'],
						'masanpham' => $cart_item['masanpham']
					);
				}

				$_SESSION['cart'] = $product;
			}
			header('Location:index.php?controller=cart&action=insetcar');
		}
	}
	static function addcart()
	{
		session_start();
		//them so luong
		if (isset($_GET['cong'])) {
			$id = $_GET['cong'];
			foreach ($_SESSION['cart'] as $cart_item) {
				if ($cart_item['id'] != $id) {
					$product[] = array(


						'tensanpham' => $cart_item['tensanpham'],
						'id' => $cart_item['id'],
						'soluong' => $cart_item['soluong'],
						'gia' => $cart_item['gia'],
						'hinh' => $cart_item['hinh'],
						'masanpham' => $cart_item['masanpham']
					);

					$_SESSION['cart'] = $product;
				} else {
					$tangsoluong = $cart_item['soluong'] + 1;
					if ($cart_item['soluong'] <= 9) {

						$product[] = array(
							'tensanpham' => $cart_item['tensanpham'],
							'id' => $cart_item['id'],
							'soluong' => $tangsoluong,
							'gia' => $cart_item['gia'],
							'hinh' => $cart_item['hinh'],
							'masanpham' => $cart_item['masanpham']
						);
					} else {
						$product[] = array(
							'tensanpham' => $cart_item['tensanpham'],
							'id' => $cart_item['id'],
							'soluong' => $cart_item['soluong'],
							'gia' => $cart_item['gia'],
							'hinh' => $cart_item['hinh'],
							'masanpham' => $cart_item['masanpham']
						);
					}
					$_SESSION['cart'] = $product;
				}
			}
			header('Location:index.php?controller=cart&action=insetcar');
		}
	}
	static function reduction()
	{
		session_start();
		if (isset($_GET['tru'])) {
			$id = $_GET['tru'];
			foreach ($_SESSION['cart'] as $cart_item) {
				if ($cart_item['id'] != $id) {
					$product[] = array(
						'tensanpham' => $cart_item['tensanpham'],
						'id' => $cart_item['id'],
						'soluong' => $cart_item['soluong'],
						'gia' => $cart_item['gia'],
						'hinh' => $cart_item['hinh'],
						'masanpham' => $cart_item['masanpham']
					);
					$_SESSION['cart'] = $product;
				} else {
					$tangsoluong = $cart_item['soluong'] - 1;
					if ($cart_item['soluong'] > 1) {
						$product[] = array(
							'tensanpham' => $cart_item['tensanpham'],
							'id' => $cart_item['id'],
							'soluong' => $tangsoluong,
							'gia' => $cart_item['gia'],
							'hinh' => $cart_item['hinh'],
							'masanpham' => $cart_item['masanpham']
						);
					} else {
						$product[] = array(
							'tensanpham' => $cart_item['tensanpham'],
							'id' => $cart_item['id'],
							'soluong' => $cart_item['soluong'],
							'gia' => $cart_item['gia'],
							'hinh' => $cart_item['hinh'],
							'masanpham' => $cart_item['masanpham']
						);
					}
					$_SESSION['cart'] = $product;
				}
			}
			header('Location:index.php?controller=cart&action=insetcar');
		}
	}
	static function deleteall(){
		session_start();
		if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
			unset($_SESSION['cart']);
			header('Location:index.php?controller=cart&action=insetcar');
		}
	}
}
