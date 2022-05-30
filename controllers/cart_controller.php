<?php
require_once('controllers/base_controller.php');
require_once('models/danhmucs/danhmuc.php');
require_once('models/cart/cart.php');


class CartController extends BaseController
{
  function __construct()
  {
    $this->folder = 'cart';
  }


  public function indexcart()
  {
    $danhmuc = Showdanhmuc::Showall();
    $data = array('danhmuc'=>$danhmuc);
    $this->render('index',$data);
  }
  public function insetcar()
  {
    // $cart = Cart::insertcart();
    // $data = array('cart_item'=>$cart);
    $danhmuc = Showdanhmuc::Showall();
    $data = array('danhmuc'=>$danhmuc);
    $this->render('index',$data);
  }
  public function deletecartt(){
    $delecart = Cart::deletecart();
  }
  public function addcart() {
    $addcart = Cart::addcart();
  }
  public function reductioncart(){
    $reductioncart = Cart::reduction();
  }
  public function deleteall()
  {
    $deleteall =Cart::deleteall();
  }
}
