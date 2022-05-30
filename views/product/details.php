<link href="public/css/star.css" rel="stylesheet">
<?php
require_once('views/permanent/menu.php');
?>
<div class="container_fullwidth">
  <div class="container">
    <div class="container_fullwidth">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h5 class="title contact-title">
              Chi tiết sản phẩm
            </h5>
          </div>
          <div class="col-md-9">
            <div class="products-details">
              <div class="preview_image">
                <div class="preview-small">
                  <img id="zoom_03" src="admin/Public/uploads/<?php echo $show->hinh ?>" width="328" height="228" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh ?>" alt="">
                </div>
                <div class="thum-image">
                  <ul id="gallery_01" class="prev-thum">
                    <li>
                      <a href="#" data-image="admin/Public/uploads/<?php echo $show->hinh ?>" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" data-image="admin/Public/uploads/<?php echo $show->hinh1 ?>" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh1 ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh1 ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" data-image="admin/Public/uploads/<?php echo $show->hinh2 ?>" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh2 ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh2 ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" data-image="admin/Public/uploads/<?php echo $show->hinh3 ?>" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh3 ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh3 ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" data-image="admin/Public/uploads/<?php echo $show->hinh3 ?>" data-zoom-image="admin/Public/uploads/<?php echo $show->hinh3 ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh3 ?>" alt="">
                      </a>
                    </li>
                  </ul>
                  <a class="control-left" id="thum-prev" href="javascript:void(0);">
                    <i class="fa fa-chevron-left">
                    </i>
                  </a>
                  <a class="control-right" id="thum-next" href="javascript:void(0);">
                    <i class="fa fa-chevron-right">
                    </i>
                  </a>
                </div>
              </div>
              <form method="POST" action="index.php?controller=product&action=insetcart&idsanpham=<?php echo $show->id_sanpham ?>">
                <div class="products-description">
                  <h5 class="name">
                    <?php echo $show->tensanpham ?>
                  </h5>
                  <p>
                    <img alt="" src="public/images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>
                  <p>
                    Tình Trạng:
                    <span class=" light-red">
                      <?php echo $show->tinhtrang ?>
                    </span>
                  </p>
                  <p>
                    <?php echo $show->tendanhmuc ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Giá :
                    <span class="new_price">
                      <?php $show1 = number_format($show->gia);
                      echo $show1 ?>
                      <sup>
                        đ
                      </sup>
                    </span>
                    <span class="old_price">
                      <?php $show2 = number_format($show->giakhuyenmai);
                      echo $show2 ?>
                      <sup>
                        đ
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Size :
                      <select class="niceselect_option" id="color1" name="produc_color">
                        <option selected value="0">size</option>
                        <option value="1">x</option>
                        <option value="2">xl</option>
                        <option value="3">md</option>
                        <option value="4">xxl</option>
                        <option value="5">s</option>
                      </select>
                    </div>
                    <div class="clearfix">
                    </div>
                    </br>
                    <?php
                    if (isset($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $cart_item) {
                    ?>
                        <div class="qty">
                          Qty &nbsp;&nbsp;:
                          <input min="1" max="100" value="<?php echo $cart_item['soluong']; ?>" type="number">

                        </div>
                    <?php
                      }
                    }
                    ?>
                    <div class="button_group">
                      </br>
                      <input class="button" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
              </form>
              <div class="clearfix">
              </div>
              <hr class="border">
              <img src="public/images/share.png" alt="" class="pull-right">
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="tab-box">
            <div id="tabnav">
              <ul>
                <li>
                  <a href="#Descraption">
                    Mô TẢ
                  </a>
                </li>
                <li>
                  <a href="#Reviews">
                    Đánh Giá
                  </a>
                </li>

              </ul>
            </div>
            <div class="tab-content-wrap">
              <div class="tab-content" id="Descraption">
                <p>
                  <?php echo $show->mota ?>
                </p>
              </div>
              <div class="tab-content" id="Reviews">
                <?php
                foreach ($comment as $comment) {
                ?>
                  <div class="review">
                    <p class="rating">
                      <i class="fa fa-star light-red">
                      </i>
                      <i class="fa fa-star light-red">
                      </i>
                      <i class="fa fa-star light-red">
                      </i>
                      <i class="fa fa-star-half-o gray">
                      </i>
                      <i class="fa fa-star-o gray">
                      </i>
                    </p>
                    <h5 class="reviewer">
                      <?php echo $comment->name ?>
                    </h5>
                    <p class="review-date">
                      Date:
                      <?php
                      echo date("Y-m-d G:i:s") . "<br />";
                      ?>
                    </p>
                    <p>
                      <?php echo $comment->noidungdanhgia ?>
                    </p>
                  </div>
                <?php
                }
                ?>
                <form action="index.php?controller=product&action=insetcomment&id_sanpham=<?php echo $show->id_sanpham ?>" method="post">
                  <div id="rating">
                    <input type="radio" id="star5" name="insertdanhgiasao" value="5" />
                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                    <input type="radio" id="star4" name="insertdanhgiasao" value="4" />
                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                    <input type="radio" id="star3" name="insertdanhgiasao" value="3" />
                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                    <input type="radio" id="star2" name="insertdanhgiasao" value="2" />
                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                    <input type="radio" id="star1" name="insertdanhgiasao" value="1" />
                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                  </div>
                  </br>
                  </br>
                  </br>
                  <div class="row">
                    <?php
                    if (isset($_SESSION['dangnhap'])) {
                    ?>
                      <p><input type="hidden" value=" <?php echo $_SESSION['dangnhap'] ?>" name="insertname"></p>
                      <p><input type="hidden" value=" <?php echo $_SESSION['email'] ?>" name="insertemail"></p>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-row">
                          <label class="lebel-abs">
                            Comment
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <textarea class="input textareafild" name="insertnoidungdanhgia" rows="7">
                            </textarea>
                        </div>
                        <div class="form-row">
                          <input type="submit" value="Submit" class="button">
                        </div>
                      </div>
                      <p><input type="hidden" value=" <?php echo $show->id_sanpham ?>" name="insertmsp"></p>
                    <?php
                    } else {
                    ?>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-row">
                          </br>
                          <label class="lebel-abs">
                            Your Name
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="text" name="insertname" class="input namefild">
                        </div>
                        <div class="form-row">
                          <label class="lebel-abs">
                            Your Email
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="text" name="insertemail" class="input emailfild">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-row">
                          <label class="lebel-abs">
                            Comment
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <textarea class="input textareafild" name="insertnoidungdanhgia" rows="7">
                            </textarea>
                        </div>
                        <div class="form-row">
                          <input type="submit" value="Submit" class="button">
                        </div>
                      </div>
                      <p><input type="hidden" value=" <?php echo $show->id_sanpham ?>" name="insertmsp"></p>
                    <?php
                    }
                    ?>
                  </div>

                </form>

              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div id="productsDetails" class="hot-products">
            <h3 class="title">
              Sản Phẩm
              <strong>
                Nổi Bật
              </strong>

            </h3>
            <div class="control">
              <a id="prev_hot" class="prev" href="#">
                &lt;
              </a>
              <a id="next_hot" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="hot">
              <li>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        - %20
                      </div>
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="public/images/khoahoc.jpeg" alt="Product Name" width="160">
                      </div>
                      <div class="productname">
                        Sach demo
                      </div>
                      <h4 class="price">
                        451.000đ
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Thêm vào Giỏ Hàng
                        </button>

                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
              </li>

            </ul>
          </div>
          <div class="clearfix">
          </div>
        </div>
        <div class="col-md-3">
          <div class="special-deal leftbar">
            <h4 class="title">
              ƯU ĐÃI
              <strong>
                ĐẶC BIỆT
              </strong>
            </h4>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="public/images/khoahoc.jpeg" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  300.000đ
                </h5>
              </div>
            </div>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="public/images/khoahoc.jpeg" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  300.000đ
                </h5>
              </div>
            </div>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="public/images/khoahoc.jpeg" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  300.000đ
                </h5>
              </div>
            </div>
          </div>


          <div class="clearfix">
          </div>
          <div class="get-newsletter leftbar">
            <h3 class="title">
              NHẬN
              <strong>
                BẢN TIN
              </strong>
            </h3>

            <form>
              <input class="email" type="text" name="" placeholder="Nhập Email...">
              <input class="submit" type="submit" value="Gửi">
            </form>
          </div>
          <div class="clearfix">
          </div>
          <div class="fbl-box leftbar">
            <h3 class="title">
              Facebook
            </h3>
            <span class="likebutton">
              <a href="#">
                <img src="public/images/fblike.png" alt="">
              </a>
            </span>
            <p>
              12k people like Flat Shop.
            </p>
            <ul>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
              <li>
                <a href="#">
                </a>
              </li>
            </ul>
            <div class="fbplug">
              <a href="#">
                <span>
                  <img src="public/images/fbicon.png" alt="">
                </span>
                Facebook social plugin
              </a>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <?php
    require_once('views/permanent/trademark.php');
    require_once('views/permanent/footer.php');
    ?>