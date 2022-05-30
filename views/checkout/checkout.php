<div class="container_fullwidth">
    <div class="container">
        <div class="breadcrumbs_area product_bread">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="title contact-title">
                            Thanh Toán
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
                    <div class="delivery-top-payment payment-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content row">
                <?php
                if (isset($_SESSION['dangnhap'])) {

                ?>
                    <form action="index.php?controller=checkout&action=paymentcart" method="post">
                        <p><input type="hidden" value=" <?php echo $_SESSION['dangnhap'] ?>" name="insertusername"></p>
                        <p><input type="hidden" value=" <?php echo $_SESSION['diachi'] ?>" name="insertdiachi"></p>
                        <p><input type="hidden" value=" <?php echo $_SESSION['email'] ?>" name="insertemail"></p>
                        <p><input type="hidden" value=" <?php echo $_SESSION['phone'] ?>" name="insertphone"></p>
                        <div class="payment-content-left">
                            <div class="payment-content-left-method-delivery">
                                <p style="font-weight: bold;">Phương thức giao hàng</p> <br>
                                <div class="payment-content-left-method-delivery-item">
                                    <input name="insertgiaohang" type="radio" value="Giao hàng chuyển phát nhanh(2-3 Ngày)">
                                    <label for="">Giao hàng chuyển phát nhanh(2-3 Ngày)</label>
                                </div>
                                <div class="payment-content-left-method-delivery-item">
                                    <input type="radio" name="insertgiaohang" value="Giao hàng chuyển phát thường(5-7 Ngày)">
                                    <label for="">Giao hàng chuyển phát thường(5-7 Ngày)</label>
                                </div>
                            </div>
                            <div class="payment-content-left-method-payment">
                                <p style="font-weight: bold;">Phương thức thanh toán</p> <br>
                                <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p> <br>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán bằng thẻ tín dụng(OnePay)">
                                    <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/visa.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán bằng thẻ ATM(OnePay)">
                                    <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/vcb.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán Momo">
                                    <label for="">Thanh toán Momo</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/momo.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input checked name="insertthanhtoan" type="radio" value="Thu tiền tận nơi">
                                    <label for="">Thu tiền tận nơi</label>
                                </div>
                            </div>
                            <div class="payment-content-right-payment">
                                <a href="index.php?controller=cart&action=indexcart"><span></span>
                                    <p>Quay lại giỏ hàng</p>
                                </a>
                                <button>HOÀN THÀNH</button>

                            </div>
                    </form>
                <?php
                } else {
                ?>
                    <form action="index.php?controller=checkout&action=paymentcart" method="post">
                        <div class="delivery-content-left">
                            <p>Vui lòng chọn địa chỉ giao hàng</p>
                            <div class="delivery-content-left-dangnhap row">
                                <a href="index.php?controller=user&action=indexlogin">
                                    <i class="fas fa-sign-in-alt">
                                        <p>Đăng nhập (Nếu bạn đã có tài khoản của supperteam)</p>
                                    </i>
                                </a>
                            </div>
                            <div class="delivery-content-left-input-top row">
                                <div class="delivery-content-left-input-top-item" >
                                    <label for="">Họ tên <span style="color: red;">*</span></label>
                                    <input required type="text" name="insertusername">
                                </div>
                                <div class="delivery-content-left-input-top-item">
                                    <label for="">Điện thoại <span style="color: red;">*</span></label>
                                    <input required type="text" name="insertphone">
                                </div>

                            </div>
                            <div class="delivery-content-left-input-top row">
                            <div class="delivery-content-left-input-top-item">
                                <label for="">Email <span style="color: red;">*</span></label>
                                <input type="text" name="insertemail">
                            </div>
                            <div class="delivery-content-left-input-top-item">
                                <label for="">Địa chỉ <span style="color: red;">*</span></label>
                                <input required type="text" name="insertdiachi">
                            </div>
                            </div>
                </br>
                        </div>
                        <div class="container">
            <div class="payment-content row">
                        <div class="payment-content-left">
                            <div class="payment-content-left-method-delivery">
                                <p style="font-weight: bold;">Phương thức giao hàng</p> <br>
                                <div class="payment-content-left-method-delivery-item">
                                    <input type="radio" required name="insertgiaohang" value="Giao hàng chuyển phát nhanh(2-3 Ngày)">
                                    <label for="">Giao hàng chuyển phát nhanh(2-3 Ngày)</label>
                                </div>
                                <div class="payment-content-left-method-delivery-item">
                                    <input type="radio" name="insertgiaohang" value="Giao hàng chuyển phát thường(5-7 Ngày)">
                                    <label for="">Giao hàng chuyển phát thường(5-7 Ngày)</label>
                                </div>
                            </div>
                            <div class="payment-content-left-method-payment">
                                <p style="font-weight: bold;">Phương thức thanh toán</p> <br>
                                <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p> <br>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán bằng thẻ tín dụng(OnePay)">
                                    <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/visa.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán bằng thẻ ATM(OnePay)">
                                    <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/vcb.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input name="insertthanhtoan" type="radio" value="Thanh toán Momo">
                                    <label for="">Thanh toán Momo</label>
                                </div>
                                <div class="payment-content-left-method-payment-item-img">
                                    <img src="public/images/momo.png" alt="">
                                </div>
                                <div class="payment-content-left-method-payment-item">
                                    <input checked name="insertthanhtoan" type="radio" value="Thu tiền tận nơi">
                                    <label for="">Thu tiền tận nơi</label>
                                </div>

                            </div>
                            <div class="payment-content-right-payment">
                                <a href="index.php?controller=cart&action=indexcart"><span></span>
                                    <p>Quay lại giỏ hàng</p>
                                </a>
                                <button>HOÀN THÀNH</button>

                            </div>

                        <?php
                    }
                        ?>
                        </div>
            </div>
                        </div>
                    </form>
            </div>
        </div>
            <div class="clearfix"></div>