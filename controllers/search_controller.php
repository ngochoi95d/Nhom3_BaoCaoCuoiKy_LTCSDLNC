<?php
require_once('controllers/base_controller.php');
require_once('models/product/product.php');
require_once('models/danhmucs/danhmuc.php');



class SearchController extends BaseController
{
  function __construct()
  {
    $this->folder = 'search';
  }
  public function indexsearch()
  {
    $danhmuc = Showdanhmuc::Showall();
    $product = ProductShow::search();
    $data = array(
        'danhmuc' => $danhmuc,
      'product' => $product
    );
    $this->render('index', $data);
  }
}
