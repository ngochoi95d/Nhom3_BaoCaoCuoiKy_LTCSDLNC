<?php
require('views/home.php')
?>
<style>
.content-wrapper{
height: auto;
}
</style>
<div class="content-wrapper" >
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm Sản Phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Admin</a></li>
                        <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?controller=product&action=insertProduct" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Mã</label>
                        <input type="text" required="required" name="insertmsp" class="form-control" placeholder="Mã sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" required="required" name="inserttensanpham" class="form-control" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" required="required" name="insertgia" class="form-control" placeholder="Giá">
                    </div>
                    <div class="form-group">
                        <label>Số Lượng</label>
                        <input type="text" required="required" name="insertsoluong" class="form-control" placeholder="Số Lượng">
                    </div>
                    <!-- <div class="form-group">
                        <label>Hình ảnh</label>
                        <textarea class="textarea" name="hinhanh"  placeholder="Hình ảnh"
                          img="width: 180px;"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; img:width: 180px;"></textarea>
                    </div> -->
                    <div class="form-group">
                        <label>Hình Anh</label>
                        <input type="file"  name="hinh" >
                    </div>
                    <div class="form-group">
                        <label>Hình 1</label>
                        <input type="file"  name="hinh1" >
                    </div>
                    <div class="form-group">
                        <label>Hình 2</label>
                        <input type="file"  name="hinh2" >
                    </div>
                    <div class="form-group">
                        <label>Hình 3</label>
                        <input type="file"  name="hinh3" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="insertmota" class="textarea" placeholder="Mô tả"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tình trạng</label>
                        <input type="text" required="required" name="inserttinhtrang" class="form-control" placeholder="Tình trạng">
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                      
                        <select name="insertdanhmuc" class="form-control select2">
                        <?php
                        foreach($danhmuc as $danhmuc){
                        ?>
                            <option value="<?php echo $danhmuc->id_danhmuc?>"><?php echo $danhmuc->tendanhmuc?></option>
                            <?php
                        }
                        ?>
                        </select>
                    </div> 
                     <div class="form-group">
                        <label>Khuyến mãi</label>
                      
                        <select name="insertkhuyenmai" class="form-control select2">
                        <?php
                        foreach($sale as $sale){
                        ?>
                            <option value="<?php echo $sale->id_khuyenmai?>"><?php echo $sale->tenkhuyenmai?></option>
                            <?php
                        }
                        ?>
                        </select>
                    </div>  
                    <button type="submit"  class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </section>
</div>
