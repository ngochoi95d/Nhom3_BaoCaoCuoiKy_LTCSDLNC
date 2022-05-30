<?php
require_once('views/permanent/menu.php');
?>


<div class="container_fullwidth">
    <div class="container">
        <div class="breadcrumbs_area product_bread">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="title contact-title">
                            Chọn Hình Thức Thanh Toán
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="delivery-top-delivery payment-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="delivery-top-adress payment-top-item">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="delivery-top-payment payment-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p> <br>
                        <div class="payment-content-left-method-delivery-item">
                            <input type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p> <br>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p> <br>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="public/images/visa.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="public/images/vcb.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán Momo</label>
                        </div>
                        <div class="payment-content-left-method-payment-item-img">
                            <img src="public/images/momo.png" alt="">
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input checked name="method-payment" type="radio">
                            <label for="">Thu tiền tận nơi</label>
                        </div>

                    </div>

                </div>
                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên thân thiết</option>
                            <option value="">D345</option>
                            <option value="">C333</option>
                            <option value="">T567</option>
                            <option value="">D333</option>
                        </select>
                    </div>
                    </br>
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>Zuýp lụa đuôi cá MS 31T0014</td>
                            <td></td>
                            <td>1</td>
                            <td>
                                <p>490.000<sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Zuýp lụa đuôi cá MS 31T0014</td>
                            <td></td>
                            <td>2</td>
                            <td>
                                <p>490.000<sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;">
                                <p>490.000<sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                            <td style="font-weight: bold;">
                                <p>49.000<sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;">
                                <p>539.000<sup>đ</sup></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="payment-content-right-payment">
                <button>HOÀN THÀNH</button>
            </div>
        </div>
        <div class="clearfix"></div>

        <?php
        require_once('views/permanent/trademark.php');
        require_once('views/permanent/footer.php');
        ?>