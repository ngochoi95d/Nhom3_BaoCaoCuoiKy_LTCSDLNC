<?php
require_once('controllers/base_controller.php');
require_once('models/product/product.php');
require_once('models/danhmucs/danhmuc.php');
require_once('models/user/User.php');


class IndexController extends BaseController
{
  function __construct()
  {
    $this->folder = 'index';
  }


  public function index()
  {
    $search = ProductShow::search();
    $user = User::all();
    $danhmuc = Showdanhmuc::Showall();
    $product = ProductShow::all();
    $data = array(
      'search' => $search,
      // 'user' => $user,
      'danhmuc' => $danhmuc,
      'product' => $product
    );
    $this->render('index', $data);
  }

}
