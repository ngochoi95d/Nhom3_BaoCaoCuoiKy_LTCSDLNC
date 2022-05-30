<?php

class ProductShow
{
    public $id_sanpham;
    public $masanpham;
    public $tensanpham;
    public $gia;
    public $hinh;
    public $hinh1;
    public $hinh2;
    public $hinh3;
    public $mota;
    public $tinhtrang;
    public $id_danhmuc;
    public $id_khuyenmai;
    public $tendanhmuc;
    public $giakhuyenmai;
    public $phantram;
    //,id_danhmuc,id_khuyenmai

    function __construct($id_sanpham, $masanpham, $tensanpham, $gia, $hinh, $hinh1, $hinh2, $hinh3, $mota, $tinhtrang, $id_danhmuc, $id_khuyenmai, $tendanhmuc, $giakhuyenmai, $phantram)
    {
        $this->id_sanpham =  $id_sanpham;
        $this->masanpham = $masanpham;
        $this->tensanpham = $tensanpham;
        $this->gia = $gia;
        $this->hinh = $hinh;
        $this->hinh1 = $hinh1;
        $this->hinh2 = $hinh2;
        $this->hinh3 = $hinh3;
        $this->mota = $mota;
        $this->tinhtrang = $tinhtrang;
        $this->id_danhmuc = $id_danhmuc;
        $this->id_khuyenmai = $id_khuyenmai;
        $this->tendanhmuc = $tendanhmuc;
        $this->giakhuyenmai = $giakhuyenmai;
        $this->phantram = $phantram;
    }

    static function Showdm()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM sanpham,danhmuc,khuyenmai WHERE sanpham.id_danhmuc='$_GET[id]' group by sanpham.id_sanpham order by id_sanpham desc LIMIT 9");
        foreach ($req->fetchAll() as $item) {
            $list[] = new ProductShow(
                $item['id_sanpham'],
                $item['masanpham'],
                $item['tensanpham'],
                $item['gia'],
                $item['hinh'],
                $item['hinh1'],
                $item['hinh2'],
                $item['hinh3'],
                $item['mota'],
                $item['tinhtrang'],
                $item['id_danhmuc'],
                $item['id_khuyenmai'],
                $item['tendanhmuc'],
                $item['giakhuyenmai'],
                $item['phantram']
            );
        }
        return $list;
    }
    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM sanpham,khuyenmai,danhmuc WHERE sanpham.id_khuyenmai=khuyenmai.id_khuyenmai AND sanpham.id_danhmuc=danhmuc.id_danhmuc ");
        foreach ($req->fetchAll() as $item) {
            $list[] = new ProductShow(
                $item['id_sanpham'],
                $item['masanpham'],
                $item['tensanpham'],
                $item['gia'],
                $item['hinh'],
                $item['hinh1'],
                $item['hinh2'],
                $item['hinh3'],
                $item['mota'],
                $item['tinhtrang'],
                $item['id_danhmuc'],
                $item['id_khuyenmai'],
                $item['tendanhmuc'],
                $item['giakhuyenmai'],
                $item['phantram']
            );
        }
        return $list;
    }
    static function find($id_sanpham)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM sanpham,khuyenmai,danhmuc WHERE sanpham.id_khuyenmai=khuyenmai.id_khuyenmai AND sanpham.id_danhmuc=danhmuc.id_danhmuc AND id_sanpham = :id_sanpham');
        $req->execute(array('id_sanpham' => $id_sanpham));
        $item = $req->fetch();
        if (isset($item['id_sanpham'])) {
            return new ProductShow(
                $item['id_sanpham'],
                $item['masanpham'],
                $item['tensanpham'],
                $item['gia'],
                $item['hinh'],
                $item['hinh1'],
                $item['hinh2'],
                $item['hinh3'],
                $item['mota'],
                $item['tinhtrang'],
                $item['id_danhmuc'],
                $item['id_khuyenmai'],
                $item['tendanhmuc'],
                $item['giakhuyenmai'],
                $item['phantram']
            );
        }
        return null;
    }
    static function search()
    {

        if (isset($_POST['timkiem'])) {
            $tukhoa = $_POST['tukhoa'];
            $list = [];
            $db = DB::getInstance();
            $req = $db->query("SELECT * FROM sanpham,danhmuc,khuyenmai WHERE  sanpham.tensanpham   LIKE '%" . $tukhoa . "%' group by sanpham.id_sanpham ");
            foreach ($req->fetchAll() as $item) {
                $list[] = new ProductShow(
                    $item['id_sanpham'],
                    $item['masanpham'],
                    $item['tensanpham'],
                    $item['gia'],
                    $item['hinh'],
                    $item['hinh1'],
                    $item['hinh2'],
                    $item['hinh3'],
                    $item['mota'],
                    $item['tinhtrang'],
                    $item['id_danhmuc'],
                    $item['id_khuyenmai'],
                    $item['tendanhmuc'],
                    $item['giakhuyenmai'],
                    $item['phantram'],
                );
            }
            return $list;
        }
    }
}
