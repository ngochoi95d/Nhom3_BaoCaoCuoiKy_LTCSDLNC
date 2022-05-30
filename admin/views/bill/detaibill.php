<?php
require('views/home.php')
?>

<!--  -->
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi Tiết Đơn Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Home</a></li>
                        <li class="breadcrumb-item active">Chi Tiết Đơn Hàng</li>
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
                            <style>
                                    .table.table-bordered.table-hover.dataTable td{
                                        vertical-align: inherit;
                                    }
                                </style>
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mã hoá đơn</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Hình</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Số Lượng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        $tongtien = 0;
                                        foreach ($bill as $bill) {
                                            $i++;
                                            $thanhtien = $bill->gia * $bill->soluongmua;
                                            $tongtien += $thanhtien;
                                        ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $i ?></td>
                                                <td><?php echo $bill->mahoadon ?></td>
                                                <td><img src='Public/uploads/<?php echo $bill->hinh ?>' width="120px"></td>
                                                <td><?php echo $bill->tensanpham ?></td>
                                                <td><?php echo $bill->soluongmua ?></td>
                                                <td><?php echo $bill->gia ?></td>
                                                <td><?php echo $thanhtien ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tr>
                                        <td colspan="7">
                                            <p>Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') .' VNĐ' ?></p>
                                        </td>

                                    </tr>
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