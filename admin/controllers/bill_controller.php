<?php
require_once('controllers/base_controller.php');
require_once('models/bill/bill.php');
require_once('models/bill/detailbill.php');
// require_once('models/product/product.php');

class BillController extends BaseController
{
  function __construct()
  {
    $this->folder = 'bill';
  }

  public function listbill()
  {
    $bill = Bill::showbill();
    $data = array('bill' => $bill);
    $this->render('bill',$data);
   
  }
  public function deletebill(){
    $bill =Bill::delete($_GET['id_giohang']);
  }

  public function statusbill(){
    $bill = Bill::status($_GET['mahoadon']);
  }

  public function showdetailbill(){
    // $product = Product::all();
    $bill = Detaibill::showbill($_GET['mahoadon']);
    $data = array (
    'bill'=>$bill);
    $this->render('detaibill',$data);
  }
}

