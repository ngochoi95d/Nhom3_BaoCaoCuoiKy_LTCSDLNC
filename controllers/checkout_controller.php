<?php
require_once('controllers/base_controller.php');
require_once('models/danhmucs/danhmuc.php');
require_once('models/payment/payment.php');

class CheckoutController extends BaseController
{
  function __construct()
  {
    $this->folder = 'checkout';
  }


  public function indexcheckout()
  {
    $danhmuc = Showdanhmuc::Showall();
    $data = array('danhmuc'=>$danhmuc);
    $this->render('index',$data);
  }
  
  // public function indexpayment()
  // {
  //   $danhmuc = Showdanhmuc::Showall();
  //   $data = array('danhmuc'=>$danhmuc);
  //   $this->render('payment',$data);
  // }
public function paymentcart(){
  $payment = Payment::paymentcart();
  $data = array('payment'=>$payment);
  $this->render('checkout',$data);
}

}
