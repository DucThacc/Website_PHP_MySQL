<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="main-content">
                <h3 class="title-page">
                    Cập nhật danh mục
                </h3>
                
                <form class="addPro" action="index.php?act=updatedm" method="POST">
                    
                    <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                        <input type="text" class="form-control" name="tendanhmuc" id="name" placeholder="Nhập tên danh mục" value="<?php if(isset($tenDanhMuc)&&($tenDanhMuc!="")) echo $tenDanhMuc;?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php if(isset($idDanhMuc)&&($idDanhMuc>0)) echo $idDanhMuc;?>">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
                        <input type="reset" class="btn btn-primary" value="Làm mới"></input>
                        <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh mục"></input></a>
                    </div> 
                    <?php 
                        if(isset($thongbao) && ($thongbao!="")){
                            echo $thongbao;
                        }              
                    ?>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>