<?php
if (isset($_SESSION['cart'])) {
    // print_r($_SESSION['cart']);
}
?>
<div class="container_fullwidth">
    <div class="container">

        <div class="breadcrumbs_area other_bread">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="title contact-title">
                            Giỏ Hàng
                        </h5>
                    </div>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">STT</th>
                                                <th class="product_remove">MSP</th>
                                                <th class="product_thumb">Hình Ảnh</th>
                                                <th class="product_name">Tên Sản Phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product_quantity">Số Lượng</th>
                                                <th class="product_total">Tổng</th>
                                                <th class="product_remove">Xoá</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $i = 0;
                                            $tongtien = 0;
                                            foreach ($_SESSION['cart'] as $cart_item) {
                                                $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                                                $tongtien += $thanhtien;
                                                $i++;
                                        ?>
                                                <tbody>
                                                    <tr>
                                                        <td class="product_remove"><?php echo $i; ?></td>
                                                        <td class="product_remove"><?php echo $cart_item['masanpham']; ?></td>
                                                        <td class="product_thumb"><a href="#"><img src="admin/Public/uploads/<?php echo $cart_item['hinh'] ?>" width="328" height="228" alt=""></a></td>
                                                        <td class="product_name"><a href="#"><?php echo $cart_item['tensanpham'] ?></a></td>
                                                        <td class="product-price"><?php echo $cart_item['gia'] ?></td>
                                                        <td class="product_quantity">
                                                            <a href="index.php?controller=cart&action=addcart&cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                                                            <?php echo $cart_item['soluong']; ?>
                                                            <a href="index.php?controller=cart&action=reductioncart&tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="product_total"><?php echo $thanhtien ?></td>
                                                        <td class="product_remove"><a href="index.php?controller=cart&action=deletecartt&xoa=<?php echo $cart_item['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            <?php
                                            }
                                            ?>

                                            <tr>
                                                <td colspan="8">
                                                    <div class="cart_submit">
                                                        <div class="checkout_btn">
                                                            <a href="index.php?controller=cart&action=deleteall&xoatatca=1">XOÁ TẤT CẢ</a>
                                                        </div>
                                                        </br>
                                                        <h3>Tổng Tiền:</h3>
                                                        <div class="coupon_inner">
                                                            <div class="checkout_btn">
                                                                <h3><?php echo $tongtien ?></h3>
                                                                </br>
                                                                <a href="index.php?controller=checkout&action=indexcheckout">Chon Phương Thức Thanh Toán</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php
                                        } else {
                                        ?>
                                            <tr>
                                                <td colspan="8">
                                                    <p>Hiện tại giỏ hàng trống</p>
                                                </td>

                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>