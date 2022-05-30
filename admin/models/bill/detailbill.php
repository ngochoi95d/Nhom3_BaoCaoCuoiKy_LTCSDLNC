<?php

class Detaibill
{
    public $id_hoadon;
    public $mahoadon;
    public $id_sanpham;
    public $soluongmua;
    public $tensanpham;
    public $gia;
    public $hinh;


    function __construct($id_hoadon, $mahoadon, $id_sanpham, $soluongmua, $tensanpham, $gia, $hinh)
    {
        $this->id_hoadon = $id_hoadon;
        $this->mahoadon = $mahoadon;
        $this->id_sanpham = $id_sanpham;
        $this->soluongmua = $soluongmua;
        $this->tensanpham = $tensanpham;
        $this->gia = $gia;
        $this->hinh = $hinh;
    }
    static function showbill($mahoadon)
    {
        $list = [];
        $db = DB::getInstance();
        // "SELECT * FROM sanpham,khuyenmai,danhmuc WHERE sanpham.id_khuyenmai=khuyenmai.id_khuyenmai AND sanpham.id_danhmuc=danhmuc.id_danhmuc "
        $req = $db->query('SELECT * FROM hoadon,sanpham WHERE hoadon.id_sanpham=sanpham.id_sanpham AND hoadon.mahoadon = '.$mahoadon.' ORDER BY hoadon.id_hoadon DESC' );
        foreach ($req->fetchAll() as $item) {
            $list[] = new Detaibill(
                $item['id_hoadon'],
                $item['mahoadon'],
                $item['id_sanpham'],
                $item['soluongmua'],
                $item['tensanpham'],
                $item['gia'],
                $item['hinh'],

            );
        }
        return $list;
    }
}
