<?php

class CommentShow
{
    public $id_danhgia;
    public $danhgiasao;
    public $name;
    public $email;
    public $noidungdanhgia;
    public $id_sanpham;

    function __construct($id_danhgia, $danhgiasao, $name, $email, $noidungdanhgia, $id_sanpham)
    {
        $this->id_danhgia = $id_danhgia;
        $this->danhgiasao = $danhgiasao;
        $this->name = $name;
        $this->email = $email;
        $this->noidungdanhgia = $noidungdanhgia;
        $this->id_sanpham = $id_sanpham;
    }


    static function showcomment()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM danhgia,sanpham WHERE  danhgia.id_sanpham=sanpham.id_sanpham');
        foreach ($req->fetchAll() as $item) {
            $list[] = new CommentShow(
                $item['id_danhgia'],
                $item['danhgiasao'],
                $item['name'],
                $item['email'],
                $item['noidungdanhgia'],
                $item['id_sanpham']
            );
        }
        return $list;
    }

    static function insertcomment()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('INSERT INTO danhgia(danhgiasao,name,email,noidungdanhgia,id_sanpham) VALUES ("' . $_POST['insertdanhgiasao'] . '","' . $_POST['insertname'] . '","' . $_POST['insertemail'] . '", "' . $_POST['insertnoidungdanhgia'] . '", "' . $_POST['insertmsp'] . '")');
        $req = $db->query('SELECT * FROM danhgia');
        foreach ($req->fetchAll() as $item) {
            $list[] = new CommentShow(
                $item['id_danhgia'],
                $item['danhgiasao'],
                $item['name'],
                $item['email'],
                $item['noidungdanhgia'],
                $item['id_sanpham']
            );
        
        }
        return $list;
    }
}
