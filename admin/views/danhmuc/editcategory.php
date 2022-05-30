<?php
require('views/home.php')
?>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sữa Danh Mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?controller=admin&action=home">Home</a></li>
                    <li class="breadcrumb-item active">Sữa Danh Mục</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <?php
                foreach ($danhmuc as $danhmuc){
            ?>
            <form action="index.php?controller=danhmuc&action=updateDmuc&id_danhmuc=<?php echo $danhmuc->id_danhmuc ?>" method="post">
                <div class="card-body">

                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input type="text" value="<?php echo $danhmuc->tendanhmuc ?>" required="required" name="tendanhmuc" class="form-control" placeholder="Tên chuyên mục" >
                    </div>
                    <div class="form-group">
                        <label>Thứ TỰ</label>
                        <input type="text" value="<?php echo $danhmuc->thutu ?>" required="required" name="thutu" class="form-control" placeholder="Thứ Tự">
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
                    <button type="submit"  class="btn btn-primary">Update</button>
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </section>
</div>