<?php
require_once('controllers/base_controller.php');
require_once('models/comment/comment.php');

class CommentController extends BaseController
{
  function __construct()
  {
    $this->folder = 'comment';
  }

  public function index()
  {
    $comment = Comment::showcomment();
    $data = array('comment' => $comment);
    $this->render('comment', $data);
  }
  public function deletecomment()
  {
    $comment = Comment::delete($_GET['id_danhgia']);
  }

 
}
