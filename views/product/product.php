<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="category leftbar">
          <h3 class="title">
            THỂ LOẠI
          </h3>
          <ul>
            <li>
              <a href="#">
            <li>
              <a href="index.php?controller=product&action=indexproduct&id=5">
                Khoa hoc
              </a>
            </li>
            <li>
              <a href="index.php?controller=product&action=indexproduct&id=6">
                Tiểu Thuyết
              </a>
            </li>
            <li>
              <a href="index.php?controller=product&action=indexproduct&id=8">
                Truyện Vui
              </a>
            </li>
            <li>
              <a href="index.php?controller=product&action=indexproduct&id=9">
                Văn Học
              </a>
            </li>

          </ul>
        </div>
        <div class="clearfix">
        </div>
        <div class="price-filter leftbar">
          <h3 class="title">
            Giá
          </h3>
          <form class="pricing">
            <label>
              <input type="number">
              Đ
            </label>
            <span class="separate">
              -
            </span>
            <label>
              <input type="number">
              Đ
            </label>
            <input type="submit" value="Go">
          </form>
        </div>
        <div class="clearfix">
        </div>
        <div class="clolr-filter leftbar">
          <h3 class="title">
            Màu
          </h3>
          <ul>
            <li>
              <a href="#" class="red-bg">
                light red
              </a>
            </li>
            <li>
              <a href="#" class=" yellow-bg">
                yellow"
              </a>
            </li>
            <li>
              <a href="#" class="black-bg ">
                black
              </a>
            </li>
            <li>
              <a href="#" class="pink-bg">
                pink
              </a>
            </li>
            <li>
              <a href="#" class="dkpink-bg">
                dkpink
              </a>
            </li>
            <li>
              <a href="#" class="chocolate-bg">
                chocolate
              </a>
            </li>
            <li>
              <a href="#" class="orange-bg">
                orange-bg
              </a>
            </li>
            <li>
              <a href="#" class="off-white-bg">
                off-white
              </a>
            </li>
            <li>
              <a href="#" class="extra-lightgreen-bg">
                extra-lightgreen
              </a>
            </li>
            <li>
              <a href="#" class="lightgreen-bg">
                lightgreen
              </a>
            </li>
            <li>
              <a href="#" class="biscuit-bg">
                biscuit
              </a>
            </li>
            <li>
              <a href="#" class="chocolatelight-bg">
                chocolatelight
              </a>
            </li>
          </ul>
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
        <div class="leftbanner">
          <img src="public/images/khoahoc.jpeg" alt="">
        </div>
      </div>
      <div class="col-md-9">
        <div class="banner">
          <div class="bannerslide" id="bannerslide">
            <ul class="slides">
              <li>
                <a href="#">
                  <img src="public/images/12.jpg" alt="" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="public/images/13.png" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="products-grid">
          <div class="toolbar">
            <div class="sorter">
              <div class="view-mode">

                <a href="#" class="grid active">
                  Grid
                </a>
              </div>
              <div class="sort-by">
                Sắp xếp theo :
                <select name="">
                  <option value="Name">
                    Tên
                  </option>
                  <option value="Price">
                    Giá thấp đến cao
                  </option>
                  <option value="Price">
                    Giá cao đến thấp
                  </option>
                </select>
              </div>
              <div class="limiter">

                </select>
              </div>
            </div>
            <div class="pager">
              <a href="#" class="prev-page">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a href="#" class="active">
                1
              </a>
              <a href="#">
                2
              </a>
              <a href="#">
                3
              </a>
              <a href="#" class="next-page">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="row">
            <?php
            foreach ($product as $show) {
            ?>

              <div class="col-md-4 col-sm-6">
                <form method="POST" action="index.php?controller=product&action=insetcart&idsanpham=<?php echo $show->id_sanpham ?>">
                  <div class="products">
                    <div class="offer">
                      - <?php echo $show->phantram ?>
                    </div>
                    <div class="thumbnail">
                      <a href="index.php?controller=product&action=indexdetails&id_sanpham=<?php echo $show->id_sanpham ?>">
                        <img src="admin/Public/uploads/<?php echo $show->hinh ?>" width="150px" height="220" alt="Product Name">
                      </a>
                    </div>
                    <div class="productname">
                      <?php echo $show->tensanpham ?>
                    </div>
                    <h4 class="price">
                      <?php echo $show->gia ?>
                    </h4>
                    <div class="button_group">
                      <input class="button add-cart" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                      <button class="button wishlist" type="button">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>

            <?php
              // }
            }
            ?>
          </div>
          <div class="clearfix">
          </div>
          <div class="toolbar">
            <div class="sorter bottom">
              <div class="view-mode">
              </div>
              <div class="sort-by">
                <!-- Sắp xếp theo : 
                      <select name="">
                  
                        <option value="Name">
                          Tên
                        </option>
                        <option value="Price">
                          Giá thấp đến cao
                        </option>
                        <option value="Price">
                          Giá cao đến thấp
                        </option> -->

                </select>
              </div>
              <div class="limiter">

                </select>
              </div>
            </div>
            <div class="pager">
              <a href="#" class="prev-page">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a href="#" class="active">
                1
              </a>
              <a href="#">
                2
              </a>
              <a href="#">
                3
              </a>
              <a href="#" class="next-page">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>