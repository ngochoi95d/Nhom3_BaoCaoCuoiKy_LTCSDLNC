<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
 
   unset($_SESSION['user']);
}
?>

<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-md-2 col-sm-2">
            <div class="logo"><a href="index.php"><img src="public/images/logoteam1.png" alt="FlatShop"  width="150"></a></div>
         </div>
         <div class="col-md-10 col-sm-10">
            <div class="header_top">
               <div class="row">
                  <div class="col-md-3">
                     <ul class="option_nav">
                        <li class="dorpdown">
                           <a href="#">Eng</a>
                           <ul class="subnav">
                              <li><a href="#">Eng</a></li>
                              <li><a href="#">Vns</a></li>
                              <li><a href="#">Fer</a></li>
                              <li><a href="#">Gem</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="topmenu">
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Dịch Vụ</a></li>
                        <li><a href="#">Hổ Trợ</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <ul class="usermenu">
                        <?php
                        if (isset($_SESSION['user'])) {
                        ?>
                           <li><a href="index.php?quanly=canhan"><i class="fas fa-user"></i> <?php $user = $_SESSION['user'];
                                echo $user->username; ?></a></li>
                           <li><a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
                        <?php
                        } else {
                        ?>
                           <li><a href="index.php?controller=user&action=indexlogin"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a></li>
                           <li><a href="index.php?controller=user&action=indexregistration"><i class="fas fa-key"></i> Đăng ký</a></li>
                        <?php
                        }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="header_bottom">
               <ul class="option">
                  <li id="search" class="search">
                     <form action="index.php?controller=search&action=indexsearch" method="POST">
                        <input  required  type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                     </form>
                  </li>
                  <li class="option-cart">
                     <a href="index.php?controller=cart&action=indexcart" class="cart-icon">cart <span class="cart_no">02</span></a>
                     <ul class="option-cart-item">
                        <li>
                           <div class="cart-item">
                              <div class="image"><img src="public/images/khoahoc.jpeg" alt=""></div>
                              <div class="item-description">
                                 <p class="name">Lincoln chair</p>
                                 <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                              </div>
                              <div class="right">
                                 <p class="price">$30.00</p>
                                 <a href="#" class="remove"><img src="public/images/remove.png" alt="remove"></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="cart-item">
                              <div class="image"><img src="public/images/khoahoc.jpeg" alt=""></div>
                              <div class="item-description">
                                 <p class="name">Lincoln chair</p>
                                 <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                              </div>
                              <div class="right">
                                 <p class="price">$30.00</p>
                                 <a href="#" class="remove"><img src="public/images/remove.png" alt="remove"></a>
                              </div>
                           </div>
                        </li>
                        <li><span class="total">Total <strong>$60.00</strong></span><button class="checkout" onClick="location.href='index.php?controller=checkout&action=indexcheckout'">CheckOut</button></li>
                     </ul>
                  </li>
               </ul>
               <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                     <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang Chủ</a>
                     </li>

                     <?php
                     foreach ($danhmuc as $danhmuc) {
                     ?>
                        <li><a href="index.php?controller=product&action=indexproduct&id=<?php echo $danhmuc->id_danhmuc ?>"> <?php echo $danhmuc->tendanhmuc ?></a></li>
                     <?php
                     }
                     ?>
                     <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang</a>
                        <div class="dropdown-menu mega-menu">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <ul class="mega-menu-links">
                                    <li><a href="productgird.php">New Collection</a></li>
                                    <li><a href="productgird.php">Shirts & tops</a></li>
                                    <li><a href="productgird.php">Laptop & Brie</a></li>
                                    <li><a href="productgird.php">Dresses</a></li>
                                    <li><a href="productgird.php">Blazers & Jackets</a></li>
                                    <li><a href="productgird.php">Shoulder Bags</a></li>
                                 </ul>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <ul class="mega-menu-links">
                                    <li><a href="productgird.php">New Collection</a></li>
                                    <li><a href="productgird.php">Shirts & tops</a></li>
                                    <li><a href="productgird.php">Laptop & Brie</a></li>
                                    <li><a href="productgird.php">Dresses</a></li>
                                    <li><a href="productgird.php">Blazers & Jackets</a></li>
                                    <li><a href="productgird.php">Shoulder Bags</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li> -->
                     <li><a href="index.php?controller=contact&action=indexcontact">LIÊN HỆ</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>