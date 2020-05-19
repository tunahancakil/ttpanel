<?php include("header.php") ?>
<?php
    $product_id  = $_GET['PRODUCT_ID'];
    $select_id   = "select * from product where id =".$product_id."";
    $result_id   = mysqli_query($conn,$select_id);
    $row_product = mysqli_fetch_assoc($result_id);
?>
    <div class="content-wrapper">
    <h1>Ürün Güncelleme</h1>
        <div class="card-body table-responsive p-8">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#general_data" data-toggle="tab">Genel Bilgiler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pages" data-toggle="tab">Türkçe Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#delivery" data-toggle="tab">Gönderim Bölgeleri</a></li>
                    </ul>
                </div>
                <form method="POST" action="process/update.php">
                    <div class="card-body">
                        <div class="tab-content">
                        <div class="active tab-pane" id="general_data">
                            <div class="form-group">
                                <label>Ana Kategori Seçiniz</label>
                                <div class="select2-purple">
                                <select name="MAIN_CATEGORY" class="form-control select2bs4" style="width: 100%;">
                                    <?php
                                        $sql_main = "select ID,TITLE from category where ACTIVE = 1";
                                        $result_main = mysqli_query($conn,$sql_main);
                                        $sql_main_category = "select * from product_category where PRODUCT_ID =".$product_id." AND IS_MAIN = 1";
                                        $result_main_category = mysqli_query($conn,$sql_main_category);
                                        $row_main_category =mysqli_fetch_assoc($result_main_category);
                                        while($row_main=mysqli_fetch_array($result_main)) {
                                            if ($row_main_category['CATEGORY_ID'] == $row_main['ID']) {
                                                echo '<option value="'.$row_main['ID'].'" selected>'.$row_main['TITLE'].'</option>';
                                            } else {
                                                echo '<option value="'.$row_main['ID'].'">'.$row_main['TITLE'].'</option>';
                                                }
                                        }
                                        ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alt Kategori Seçiniz</label>
                                <div class="select2-purple">
                                <select name="CATEGORY[]" class="select2bs4" multiple="multiple" data-placeholder="Kategori Seçimi Yapınız" style="width: 100%;">
                                    <?php
                                        $sql_sub = "select ID,TITLE from category where ACTIVE = 1";
                                        $result_sub = mysqli_query($conn,$sql_sub);
                                        while($row_sub=mysqli_fetch_array($result_sub)) {
                                            $sql_sub_category = "select * from product_category where PRODUCT_ID =".$product_id." AND CATEGORY_ID = ".$row_sub['ID']." AND IS_MAIN = 0";
                                            $result_sub_category = mysqli_query($conn,$sql_sub_category);
                                            $row_sub_category=mysqli_fetch_assoc($result_sub_category);
                                            if (is_null($row_sub_category['CATEGORY_ID'])) {
                                                echo '<option value="'.$row_sub['ID'].'">'.$row_sub['TITLE'].'</option>';
                                            } else {
                                                echo '<option value="'.$row_sub['ID'].'" selected>'.$row_sub['TITLE'].'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            </div>
                            <label class="col-form-label" for="inputError"> Ürün Tipi</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="MAIN_PRODUCT" name="PRODUCT_TYPE" value="<?php echo $row_product['PRODUCT_TYPE'] ?>" checked>
                                    <label for="MAIN_PRODUCT" class="custom-control-label">Ana Ürün</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="EXTRA_PRODUCT" value="<?php echo $row_product['PRODUCT_TYPE'] ?>" name="PRODUCT_TYPE">
                                    <label for="EXTRA_PRODUCT" class="custom-control-label">Ek Ürün</label>
                                </div>
                            </div>
                            <label class="col-form-label" for="inputError">Yayına Alınsın Mı?</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" value="<?php echo $row_product['STATUS'] ?>" id="YES_TAX" name="STATUS" checked>
                                    <label for="YES_TAX" class="custom-control-label">Evet</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="NO_TAX" value="<?php echo $row_product['STATUS'] ?>" name="STATUS">
                                    <label for="NO_TAX" class="custom-control-label">Hayır, taslak olarak kaydet</label>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>KDV %</label>
                              <select name="TAX" class="form-control select2bs4" style="width: 100%;">
                                <option selected="18">18</option>
                                <option>8</option>
                                <option>1</option>
                              </select>
                            </div>
                            <label class="col-form-label" for="INCLUDE_TAX">Girilen Fiyatlara KDV</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="YES_KDV" name="INCLUDE_TAX" value="<?php echo $row_product['INCLUDE_TAX'] ?>" checked required>
                                    <label for="YES_KDV" class="custom-control-label">Dahil</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="NO_KDV" value="<?php echo $row_product['INCLUDE_TAX'] ?>" name="INCLUDE_TAX" required>
                                    <label for="NO_KDV" class="custom-control-label">Hariç</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="PRICE">Ürün Fiyatı</label>
                                <input step="0.01" type="number" class="form-control" name="PRICE" value="<?php echo $row_product['PRICE'] ?>"required>
                            </div>
                            <p>( Örn. 15.50 )</p>
                            <div class="form-group">
                                <label for="DISCOUNT_PRICE">Varsa İndirimli Fiyat</label>
                                <input step="0.01" type="number" class="form-control" name="DISCOUNT_PRICE" value="<?php echo $row_product['DISCOUNT_PRICE'] ?>">
                            </div>
                            <p>( Örn. 15.50 )</p>
                            <div class="form-group">
                                <label for="STOCK">Stok Miktarı</label>
                                <input type="number" class="form-control" name="STOCK" value="<?php echo $row_product['STOCK'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="MIN_STOCK">Minimum Stok Miktarı</label>
                                <input type="number" class="form-control" name="MIN_STOCK" value="<?php echo $row_product['MIN_STOCK'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="STOCK_CODE">Stok Kodu</label>
                                <input type="text" class="form-control" name="STOCK_CODE" value="<?php echo $row_product['STOCK_CODE'] ?>" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                <?php if( $row_product['ABROAD'] == 0) {
                                  echo '<input class="custom-control-input" type="checkbox" name="ABROAD" id="ABROAD">';
                                } else {
                                  echo '<input class="custom-control-input" type="checkbox" name="ABROAD" id="ABROAD" checked>';
                                }
                                ?>
                                <label for="ABROAD" class="custom-control-label">Bu ürün sadece yurtdışı bölgelerine satılsın.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" type="checkbox" name="CUSTOMER_UPLOAD" id="CUSTOMER_UPLOAD">
                                  <label for="CUSTOMER_UPLOAD" class="custom-control-label">Müşteriler Görsel Yükleyebilsin (Kişisel Ürünler)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="DECI">Desi</label>
                                <input type="number" class="form-control" name="DECI" value="<?php echo $row_product['DECI'] ?>" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                <?php if( $row_product['FREE_CARGO'] == 0) {
                                    echo '<input class="custom-control-input" type="checkbox" name="FREE_CARGO" id="FREE_CARGO">';
                                } else {
                                    echo '<input class="custom-control-input" type="checkbox" name="FREE_CARGO" id="FREE_CARGO" checked>';
                                } 
                                ?>
                                  <label for="FREE_CARGO" class="custom-control-label">Ücretsiz Kargo Olsun</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CARGO_NOTE">Kargo Yazısı</label>
                                <input type="text" class="form-control" name="CARGO_NOTE" value="<?php echo $row_product['CARGO_NOTE'] ?>">
                            </div>
                        </div>
                        <div class="tab-pane" id="pages">
                            <div class="form-group">
                                <label for="TITLE">Ürün Başlık</label>
                                <input type="text" class="form-control" name="TITLE" placeholder="<?php echo $row_product['TITLE'] ?>" value="<?php echo $row_product['TITLE'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="URL">Türkçe İsteğe Bağlı URL</label>
                                <input pattern="\S+" type="text" class="form-control" name="URL" value="<?php echo $row_product['URL'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="DESCRIPTION">Türkçe Ürün Yazısı</label>
                                <div class="mb-3">
                                    <textarea class="textarea" name="DESCRIPTION"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row_product['DESCRIPTION'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn bg-gradient-primary">Görsel Seç</button>
                            </div>
                        </div>
                        <div class="tab-pane" id="delivery">
                            <div class="form-group">
                                <label for="aa">Kargo Yazısı</label>
                                <input type="number" class="form-control" name="aa" placeholder="Ürün Fiyat">
                            </div>
                        </div>
                        </div>    
                    </div>
                    <input type="hidden" name="editType" value="Product">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>