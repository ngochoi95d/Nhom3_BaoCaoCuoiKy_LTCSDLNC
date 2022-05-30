<?php
require_once('controllers/base_controller.php');
require_once('models/danhmucs/danhmuc.php');
// require_once('models/danhmuc.php');

class ContactController extends BaseController
{
  function __construct()
  {
    $this->folder = 'contact';
  }


  public function indexcontact()
  {
    $danhmuc = Showdanhmuc::Showall();
    $data = array('danhmuc'=>$danhmuc);
    $this->render('index',$data);
  }
}
