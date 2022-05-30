<?php
require_once('controllers/base_controller.php');
require_once('models/user/user.php');

class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'user';
  }

  public function index()
  {
    $user = User::all();
    $data = array('user' => $user);
    $this->render('user', $data);
  }
  // public function showDM()
  // {
  //   $post = User::find($_GET['id_user']);
  //   $data = array('user' => $post);
  //   $this->render('editcategory', $data);
  // }
  // public function insertDmuc()
  // {
  //       $user = User::insert();
  //       $data = array('user' => $user);
  //       $this->render('addcategory',$data);
  // }
  // public function updateDmuc()
  // {
  //       $user = User::update($_GET['id_user']);
  //       $data = array('user' => $user);
  //       $this->render('editcategory',$data);
  // }
  public function deleteUser()
  {
        $user = User::delete($_GET['id_user']);
        $data = array('user' => $user);
        $this->render('user',$data);
  }
  // public function listuser()
  // {
  //   $user = User::all();
  //   $data = array('user' => $user);
  //   $this->render('user',$data);
   
  // }
 
}

