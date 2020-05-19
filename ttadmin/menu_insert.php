<?php include("header.php") ?>
    <div class="content-wrapper">
    <h1>Menü Ekleme</h1>
        <div class="card-body table-responsive p-8">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#general_data" data-toggle="tab">Genel Bilgiler</a></li>
                    </ul>
                </div>
                <form method="POST" action="process/insert.php">
                    <div class="card-body">
                        <div class="tab-content">
                        <div class="active tab-pane" id="general_data">
                            <div class="form-group">
                                <label for="TITLE">Menü Adı</label>
                                <input type="text" class="form-control" name="TITLE" placeholder="Menü Adı" required>
                            </div>
                            <div class="form-group">
                                <label>Menü Yeri</label>
                                <div class="select2-purple">
                                <select name="MAIN_CATEGORY" class="form-control select2bs4" style="width: 100%;">
                                        <option value="HEADER">Üst Menü</option>
                                        <option value="FOOTER">Alt Menü</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Menü Pozisyonu</label>
                                <div class="select2-purple">
                                <select name="MAIN_CATEGORY" class="form-control select2bs4" style="width: 100%;">
                                    <option value="">Ana Menü</option>
                                    <?php
                                        $sql = "select * from menu where ACTIVE = 1 AND PARENT_ID != 0";
                                        $result = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_array($result)) {
                                        echo '<option value="'.$row['ID'].'">'.$row['TITLE'].'</option>';
                                        }
                                    ?>
                                </select>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>    
                    <input type="hidden" name="insertType" value="Menu">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>