<?php
require_once('controllers/base_controller.php');
require_once('models/user/User.php');
  
class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'user';
  }

  //hiển thị trang đăng nhập
  public function indexlogin()
  {
    $this->render('login');
  }
  

  //xử lý đăng nhập
  public function loginuser()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(User::login($email, $password) != null) {
      session_start();
      $user = User::login($email, $password);
      $_SESSION['user'] = $user;
      header("location:index.php");
    } else {
      $err = "Email hoặc mật khẩu chưa đúng!";
      $data = array('err' => $err);
      $this ->render('login',$data);
    }
  }

  //hiển thị trang đăng kí
  public function indexregistration()
  {
    $this->render('registration');
  }

  //xử lý đăng kí
  public function regisuser()
  {
    $email = $_POST['insertemail'];
    $username = $_POST['insertusername'];
    $password = $_POST['inserpassword'];
    $diachi = $_POST['insertdiachi'];
    $sdt = $_POST['insertphone'];
    if(User::checkEmail($email) == true) {
      $err = "Email đã tồn tại. Vui lòng nhập email khác!";
      $data = array('err' => $err, 'username' => $username, 'password' => $password, 'diachi' => $diachi, 'sdt' => $sdt);
      $this->render('registration', $data);
    } else {
      User::insertItem($username, $password, $diachi, $sdt, $email);
      $this->indexlogin();
    }  
  }

  //hiển thị giao diện lấy lại mật khẩu bằng email
  public function indexforgetpassword()
  {
    $this->render('forgetpassword');
  }

  //lấy mật khẩu hiển thị cho người dùng
  public function forgetpassword()
  {
    $email = $_POST['emailcheck'];
    if(User::checkEmail($email) == false) {
      $err = "Email này chưa có tài khoản. Vui lòng nhập lại!";
      $data = array('err' => $err);
      $this ->render('forgetpassword',$data);
      return;
    } else {
      if(User::getPass($email) != 0) {
        $password = User::getPass($email);
        $data = array('pass' => $password);
        $this ->render('forgetpassword',$data);
        return;
      }
    }
  }

}