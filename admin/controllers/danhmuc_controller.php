<?php
require_once('controllers/base_controller.php');
require_once('models/danhmuc/danhmuc.php');

class DanhmucController extends BaseController
{
  function __construct()
  {
    $this->folder = 'danhmuc';
  }
  public function listdanhmuc()
  {
    $danhmuc = Danhmuc::all();
    $data = array('danhmuc' => $danhmuc);
    $this->render('danhmuc',$data);
   
  }
  public function insertDmuc()
  {
      $danhmuc = Danhmuc::insert();
  }
  public function addcategoryDM()
  {
    $this->render('addcategory');
  }
  public function updateDmuc()
  {
      $danhmuc = Danhmuc::update($_GET['id_danhmuc']);

  }
  public function editcategoryDM()
  {
    $danhmuc = Danhmuc::checkupdate();
    $data = array('danhmuc' => $danhmuc);
    $this->render('editcategory',$data);
  }
  public function deleteDmuc()
  {
      $danhmuc = Danhmuc::delete($_GET['id_danhmuc']);

  }

}

