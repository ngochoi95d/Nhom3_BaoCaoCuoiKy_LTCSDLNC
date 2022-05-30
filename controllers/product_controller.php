<?php
require_once('controllers/base_controller.php');
require_once('models/product/product.php');
require_once('models/danhmucs/danhmuc.php');
require_once('models/comment/comment.php');
require_once('models/cart/cart.php');


class ProductController extends BaseController
{
  function __construct()
  {
    $this->folder = 'product';
  }


  public function indexproduct()
  {
    $danhmuc = Showdanhmuc::Showall();
    $product = ProductShow::Showdm();
    $data = array(
      'danhmuc' => $danhmuc,
      'product' => $product
    );
    $this->render('index', $data);
  }

  //xu ly thông tin san pham
  public function indexdetails()
  {
    $danhmuc = Showdanhmuc::Showall();
    $commet = CommentShow::showcomment();
    $showdetails = ProductShow::find($_GET['id_sanpham']);
    $data = array(
      'comment' => $commet,
      'danhmuc' => $danhmuc,
      'show' => $showdetails
    );
    $this->render('details', $data);
  }
  //xu lý comment

  public function insetcomment()
  {

    $danhmuc = Showdanhmuc::Showall();
    $incommet = CommentShow::insertcomment();
    $commet = CommentShow::showcomment();
    $showdetails = ProductShow::find($_GET['id_sanpham']); 
    $data = array(
      'danhmuc' => $danhmuc,
      'comment' => $commet,
      'show' => $showdetails

    );
    $this->render('details', $data);

  }
  public function insetcart()
  {
    $incart = Cart::insertcart();
    $danhmuc = Showdanhmuc::Showall();
    $showdetails = ProductShow::find($_GET['id_sanpham']); 
    $data = array(
      'danhmuc' => $danhmuc,
      'show' => $showdetails

    );
    $this->render('details', $data);

  }

}
