<?php include("header.php") ?>
    <div class="content-wrapper">
    <h1>Kategori Ekleme</h1>
        <div class="card-body table-responsive p-8">
        <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#feature" data-toggle="tab">Özellik</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pages" data-toggle="tab">Türkçe Sayfa</a></li>
                    </ul>
                </div>
                <form method="POST" action="process/insert.php">
                    <div class="card-body">
                        <div class="tab-content">
                        <div class="active tab-pane" id="feature">
                            <div class="form-group">
                                <label>Üst Kategorisi</label>
                                <div class="select2-purple">
                                <select name="MAIN_CATEGORY" class="form-control select2bs4" style="width: 100%;">
                                    <option value="0">Ana Kategori</option>
                                    <?php
                                        $sql = "select ID,TITLE from category where ACTIVE = 1";
                                        $result = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_array($result)) {
                                        echo '<option value="'.$row['ID'].'">'.$row['TITLE'].'</option>';
                                        }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <label class="col-form-label" for="STATUS">Yayına Alınsın Mı?</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="STATUS" checked>
                                    <label for="STATUS" class="custom-control-label">Evet</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="STATUS">
                                    <label for="STATUS" class="custom-control-label">Hayır, taslak olarak kaydet</label>
                                </div>
                            </div>
                            <label class="col-form-label" for="inputError">Saat Formatı</label>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="TIME_FORMAT" value="BETWEEN" checked>
                                    <label for="TIME_FORMAT" class="custom-control-label">Aralıklı Saat (09:00 - 13:00)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="TIME_FORMAT" value="DISTINCT" >
                                    <label for="TIME_FORMAT" class="custom-control-label">Tam Saat (17:10)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Seçili Tarihlerde Kategoriye Bağlı Ürünlerde Teslimat Yapılmasın</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control float-right" name="NOT_DELIVERY">
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane" id="pages">
                                <div class="form-group">
                                    <label for="TITLE">Türkçe Kategori Adı</label>
                                    <input type="text" class="form-control" name="TITLE">
                                </div>
                                <div class="form-group">
                                    <label for="URL">Türkçe İsteğe bağlı URL</label>
                                    <input type="text" class="form-control" name="URL">
                                </div>
                                <div class="form-group">
                                    <label for="PAGE_TEXT">Türkçe Sayfa Yazısı</label>
                                    <textarea name="PAGE_TEXT" rows="10" cols="80"></textarea>
                                </div>
                                <!--
                                <div class="form-group">
                                    <label for="URL">Türkçe Sayfa Başlık (SEO)</label>
                                    <input type="number" class="form-control" name="URL">
                                </div>
                                <div class="form-group">
                                    <label for="URL">Türkçe Meta Keywords (SEO)</label>
                                    <input type="number" class="form-control" name="URL">
                                </div>
                                <div class="form-group">
                                    <label for="URL">Türkçe Meta Description (SEO)</label>
                                    <input type="number" class="form-control" name="URL">
                                </div>
                                -->
                                <div class="form-group">
                                    <button type="button" class="btn bg-gradient-primary">Görsel Seç</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="category" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>