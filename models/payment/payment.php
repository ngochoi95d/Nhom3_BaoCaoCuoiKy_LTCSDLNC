<?php
class Payment
{

    static function paymentcart()
    {
        session_start();
        $db = DB::getInstance();
        $id_khachhang = $_SESSION['id_khachhang'];
        $mahoadon = rand(0, 9999);
        $req = $db->query("INSERT INTO giohang(id_user,mahoadon,username,diachi,phone,email,giaohang,thanhtoan,tinhtrang) VALUE('" . $id_khachhang . "','" . $mahoadon . "','" . $_POST['insertusername'] . "','" . $_POST['insertdiachi'] . "','" . $_POST['insertphone'] . "','" . $_POST['insertemail'] . "','" . $_POST['insertgiaohang'] . "','" . $_POST['insertthanhtoan'] . "',1)");
        if ($req) {
            //them gio hang chi tiet
            foreach ($_SESSION['cart'] as $key => $value) {
                $db = DB::getInstance();
                $id_sanpham = $value['id'];
                $soluong = $value['soluong'];
                $req = $db->query("INSERT INTO hoadon(mahoadon,id_sanpham,soluongmua) VALUE('" . $mahoadon . "','" . $id_sanpham . "','" . $soluong . "')");
            }
        }
        unset($_SESSION['cart']);
        header('Location:index.php');
    }
}
