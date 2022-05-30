<?php
require('views/home.php')
?>

<!--  -->
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Bill</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách Bill</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mã hoá đơn</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên khách hàng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Địa chỉ</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Điện thoại</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Hình thức giao</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Thanh Toán</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tình trạng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Chi Tiết SP</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($bill as $bill) {
                                            $i++;

                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $i ?></td>
                                                <td><?php echo $bill->mahoadon ?></td>
                                                <td><?php echo $bill->username ?></td>
                                                <td><?php echo $bill->diachi ?></td>
                                                <td><?php echo $bill->email ?></td>
                                                <td><?php echo $bill->phone ?></td>
                                                <td><?php echo $bill->giaohang ?></td>
                                                <td><?php echo $bill->thanhtoan ?></td>
                                                <td><?php if ($bill->tinhtrang == 1) {
                                                        echo '<a href="index.php?controller=bill&action=statusbill&mahoadon=' . $bill->mahoadon . '" >đơn hàng mới</a>';
                                                    } else {
                                                        echo 'Đã Xem và đang vận chuyển';
                                                    } ?></td>

                                                <td style="text-align: center;">
                                                    <span class="badge bg-primary">
                                                        <a href="index.php?controller=bill&action=showdetailbill&mahoadon=<?php echo $bill->mahoadon ?>">
                                                        <i class="ionicons ion-ios-cart"></i>
                                                    </span>

                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a href="index.php?controller=bill&action=deletebill&id_giohang=<?php echo $bill->id_giohang ?>">
                                                            <ion-icon name="trash-outline"></ion-icon><a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>