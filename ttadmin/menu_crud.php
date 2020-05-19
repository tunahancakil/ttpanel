<?php include("header.php") ?>
    <div class="content-wrapper">
    <h1>Menu Ekleme</h1>
        <div class="card-body table-responsive p-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Menu Ekleme</h3>
                </div>
                <form method="POST" action="process/insert.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="menuTitle">Menü Başlık</label>
                            <input type="text" class="form-control" name="menuTitle" placeholder="Menü Başlığı">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Menü URL</label>
                            <input type="text" class="form-control" name="menuUrl" placeholder="Menü Adresi">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Durum</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>