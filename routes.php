<?php
$controllers = array(
  'pages' => [ 'error'],
  'index' => ['index'],
  'contact' => ['indexcontact'],
  'product' => ['indexproduct','indexdetails','insetcomment','insetcart'],
  'cart' => ['indexcart','insetcar','deletecartt','addcart','reductioncart','deleteall'],
  'checkout' => ['indexcheckout','indexpayment','paymentcart'],
  'user' => ['indexlogin','loginuser','regisuser','indexregistration','indexforgetpassword','forgetpassword'],
  'search' => ['indexsearch'],

);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}

include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();