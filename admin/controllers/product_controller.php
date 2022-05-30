<?php
require_once('controllers/base_controller.php');
require_once('models/products/product.php');
require_once('models/danhmuc/danhmuc.php');
require_once('models/sale/sale.php');

class ProductController extends BaseController
{
  function __construct()
  {
    $this->folder = 'product';
  }
  // load danh sach
  public function index()
  {

    $product = Product::all();
    $data = array("product" => $product);
    $this->render('product', $data);
  }

  //xu lý insert
  public function insertProduct()
  {
    $product = Product::insert();
  }
  public function addProduct()
  {
    $sale = Sale::show();
    $danhmuc = Danhmuc::all();
    $data = array(
      "sale"  => $sale,
      "danhmuc" => $danhmuc
    );
    $this->render('addproduct', $data);
  }

  // xu lý update
  public function updateProduct()
  {
    $product = Product::update($_GET['id_sanpham']);
  }
  public function editProduct()
  {
    $sale = Sale::show();
    $danhmuc = Danhmuc::all();
    $product = Product::checkupdate();
    $data = array(
      "sale"  => $sale,
      "danhmuc" => $danhmuc,
      "product" => $product
    );
    $this->render('editproduct', $data);
  }
  // xu lý detele
  public function deleteProduct()
  {
    $product = Product::delete($_GET['id_sanpham']);
  }
}
