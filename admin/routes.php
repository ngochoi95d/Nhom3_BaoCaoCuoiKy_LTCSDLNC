<?php
$controllers = array(
  'pages' => ['error'],
  'admin' => ['index', 'loginAdmin', 'home'],
  'danhmuc' => ['insertDmuc', 'updateDmuc', 'deleteDmuc', 'listdanhmuc','addcategoryDM','editcategoryDM'],
  'user' => ['index','deleteUser'],
  'sale' => ['index','insertSale','showaddsale','deleteSale','updateSale','editSale'],
  'comment' => ['index','deletecomment'],
  'product' => ['index','insertProduct','addProduct','deleteProduct','updateProduct','editProduct'],
  'bill' => ['listbill','deletebill','statusbill','showdetailbill'],
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {

  $controller = 'pages';
  $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();