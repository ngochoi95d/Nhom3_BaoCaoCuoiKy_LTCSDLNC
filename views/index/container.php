<div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
               <h3 class="title">Sản Phẩm<strong> Mới</strong></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">  
                        <?php
                           foreach ($product as $show){
                           ?>
                           <div class="col-md-3 col-sm-6">
                           <form method="POST" action="index.php?controller=product&action=insetcart&idsanpham=<?php echo $show->id_sanpham ?>">
                              <div class="products">
                                 <div class="offer">- <?php echo $show->phantram?></div>
                                 <div class="thumbnail"><a href="index.php?controller=product&action=indexdetails&id_sanpham=<?php echo $show->id_sanpham ?>"><img src="admin/Public/uploads/<?php echo $show->hinh ?>" width="150px" height="220" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $show->tensanpham?></div>
                                 <h4 class="price"><?php $show= number_format($show->gia); echo $show?> VNĐ</h4>
                                 <div class="button_group">
                                 <input class="button add-cart" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                                    <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <?php
                           }
                           ?>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                             <?php
                           foreach ($product as $show){
                           ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="index.php?controller=product&action=indexdetails&id_sanpham=<?php echo $show->id_sanpham ?>"><img src="admin/Public/uploads/<?php echo $show->hinh ?>" width="150px" height="220" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $show->tensanpham?></div>
                                 <h4 class="price"><?php echo $show->gia?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <?php
                           }
                           ?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <!-- <div class="featured-products"> -->
               <!-- <h3 class="title">Sản Phẩm<strong> Nổi Bật </strong> </h3> -->
                  <!-- <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div> -->
                  <!-- <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-06.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-07.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="public/images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul> -->
               <!-- </div> -->
               <div class="clearfix"></div>
              