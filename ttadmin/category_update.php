<?php include("header.php") ?>
<?php
    $category_id  = $_GET['id'];
   
    $select_id   = "select * from category where id =".$category_id."";
    $result_id   = mysqli_query($conn,$select_id);
    $row_category = mysqli_fetch_assoc($result_id);
?>
    <div class="content-wrapper">
    <h1>Kategori Ekleme</h1>
        <div class="card-body table-responsive p-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Kategori Ekleme</h3>
                </div>
                <form method="POST" action="process/update.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="TITLE">Kategori Başlık</label>
                            <input type="text" class="form-control" name="TITLE" value="<?php echo $row_category['TITLE']?>">
                        </div>
                        <div class="form-group">
                            <label for="URL">Kategori URL</label>
                            <input type="text" class="form-control" name="URL" value="<?php echo $row_category['URL']?>">
                        </div>
                        <div class="form-group">
                            <label for="DESCRIPTION">Kategori Açıklama</label>
                            <input type="text" class="form-control" name="DESCRIPTION" value="<?php echo $row_category['DESCRIPTION']?>">
                        </div>
                        <div class="form-group">
                            <label for="TIME_FORMAT">Kategori Açıklama</label>
                            <br>
                            <?php 
                                if ($row_category['TIME_FORMAT']=='BETWEEN') { ?>
                                    <input type="radio" name="TIME_FORMAT" value="BETWEEN" checked>
                                    <label for="BETWEEN">Aralıklı Saat (09:00 - 13:00)</label><br>
                                <?php } else { ?>
                                    <input type="radio" name="TIME_FORMAT" value="DISTINCT" checked>
                                    <label for="DISTINCT">Tam Saat (17:10)</label><br>                    
                                <?php } ?>
                        </div>
                        <input type="hidden" class="form-control" name="ID" value="<?php echo $_GET['id']?>">
                    </div>
                    <div class="card-footer">
                    <button type="submit" name="category_update" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>