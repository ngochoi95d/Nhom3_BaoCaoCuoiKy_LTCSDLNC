<?php
require('views/home.php')
?>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm Khuyến Mãi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Admin</a></li>
                        <li class="breadcrumb-item active">Thêm Khuyến Mãi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?controller=sale&action=insertSale" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" required="required" name="insertkm" class="form-control" placeholder="Tên Khuyến Mãi">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input  required="required" name="insertgiakm" class="form-control" placeholder="Giá Khuyến Mãi">
                    </div>
                    <div class="form-group">
                        <label>Phần trăm</label>
                        <input  required="required" name="insertptram" class="form-control" placeholder="Phần Trăm">
                    </div>

                    <!-- <div class="form-group">
                        <label>Chuyên mục</label>
                        <select name="category_id" class="form-control select2">
                            <option>1</option>
                        </select>
                    </div> -->
                    <!-- <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="textarea" name="summary" required="required" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div> -->
                    <!-- <div class="form-group">
                        <label>Nội dung</label>
                        <textarea required="required" name="content" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div> -->
                    <button type="submit"  class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </section>
</div>