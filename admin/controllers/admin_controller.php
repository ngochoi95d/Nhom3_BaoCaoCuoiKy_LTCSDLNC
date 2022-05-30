
<?php
require_once('controllers/base_controller.php');
require_once('models/admin/admin.php');

class AdminController extends BaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

//loand trang login
  public function index(){
    $this->render('login');
  }

//check user vs password
  public function loginAdmin()
  {
    $admin = Admin::login();
   if($admin>0){
    $this->render('index');
   }else{
    $this->render('login');
   }
  }
// loang lai trang index
public function home(){
    $this->render('index');

  }
}

