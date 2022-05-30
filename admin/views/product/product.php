<?php
require('views/home.php')
?>
<style>
.content-wrapper{
height: auto;
}
</style>

<div class="content-wrapper" style="min-height: 1203.6px">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh Sách Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Home</a></li>
                        <li class="breadcrumb-item active">Danh Sách Sản Phẩm</li>
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mã sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Số Lượng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ảnh 1</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ảnh 2</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ảnh 3</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mô tả</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tình trạng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Danh mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Khuyến mãi</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Sữa</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $i =0;
                                    foreach ($product as $product){
                                        $i++;
                                    ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $i ?></td>
                                            <td><?php echo $product->masanpham ?></td>
                                            <td><?php echo $product->tensanpham ?></td>
                                            <td><?php echo $product->gia ?></td>
                                            <td><?php echo $product->soluong ?></td>
                                            <td><img src='Public/uploads/<?php echo $product->hinh ?>' width="120px"></td>
                                            <td><img src='Public/uploads/<?php echo $product->hinh1 ?>' width="40px"></td>
                                            <td><img src='Public/uploads/<?php echo $product->hinh2 ?>' width="40px"></td>
                                            <td><img src='Public/uploads/<?php echo $product->hinh3 ?>' width="40px"></td>
                                            <td><?php echo $product->mota ?></td>
                                            <td><p><?php echo $product->tinhtrang ?></p></td>
                                            <td><p><?php echo $product->tendanhmuc ?></p></td>
                                            <td><p><?php echo $product->tenkhuyenmai ?></p></td>

                                            <td style="text-align: center;">
                                                <span class="badge bg-primary">
                                                     <a href="index.php?controller=product&action=editProduct&id_sanpham=<?php echo $product->id_sanpham ?>">  <ion-icon name="create-outline"></ion-icon></a>
                                                        </span>

                                            </td>
                                            <td style="text-align: center;">
                                                <span class="badge bg-danger">
                                                <a href="index.php?controller=product&action=deleteProduct&id_sanpham=<?php echo $product->id_sanpham ?>"><ion-icon name="trash-outline"></ion-icon><a>
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


