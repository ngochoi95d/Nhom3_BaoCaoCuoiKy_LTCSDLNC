<?php
require('views/home.php')
?>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm Danh Mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Home</a></li>
                    <li class="breadcrumb-item active">Thêm Danh MỤC</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?controller=danhmuc&action=insertDmuc" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input type="text" required="required" name="insertdm" class="form-control" placeholder="Tên chuyên mục">
                    </div>
                    <div class="form-group">
                        <label>Thứ TỰ</label>
                        <input type="text" required="required" name="insertthutu" class="form-control" placeholder="Tên chuyên mục">
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