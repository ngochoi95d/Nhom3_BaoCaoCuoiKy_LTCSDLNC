<?php
require_once('controllers/base_controller.php');
require_once('models/sale/sale.php');

class SaleController extends BaseController
{
  function __construct()
  {
    $this->folder = 'sale';
  }

  public function index()
  {
    $sale = Sale::show();
    $data = array('sale' => $sale);
    $this->render('sale', $data);
  }
  public function insertSale()
  {
        $sale = Sale::insert();
        $data = array('sale' => $sale);
        $this->render('addsale',$data);
  }
  public function updateSale()
  {
        $sale = Sale::update($_GET['id_khuyenmai']);
        $data = array('sale' => $sale);
        $this->render('editsale',$data);
  }
  public function deleteSale()
  {
        $sale = Sale::delete($_GET['id_khuyenmai']);
        $data = array('sale' => $sale);
        $this->render('Sale',$data);
  }
  public function showaddsale()
  {
    
    $this->render('addsale');
  }
  public function editSale()
  {
    $sale = Sale::checkupdate();
    $data = array('sale' => $sale);
    $this->render('editsale',$data);
  }
}

