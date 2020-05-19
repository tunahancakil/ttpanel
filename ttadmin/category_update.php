<?php include("header.php") ?>
    <div class="content-wrapper">
    <h1>Kategori Ekleme</h1>
        <div class="card-body table-responsive p-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Kategori Ekleme</h3>
                </div>
                <form method="POST" action="process/insert.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="TITLE">Kategori Başlık</label>
                            <input type="text" class="form-control" name="TITLE" placeholder="Kategori Başlığı">
                        </div>
                        <div class="form-group">
                            <label for="URL">Kategori URL</label>
                            <input type="text" class="form-control" name="URL" placeholder="Kategori Adresi">
                        </div>
                        <div class="form-group">
                            <label for="DESCRIPTION">Kategori Açıklama</label>
                            <input type="text" class="form-control" name="DESCRIPTION" placeholder="Kategori Açıklama">
                        </div>
                        <div class="form-group">
                            <label for="DESCRIPTION">Kategori Açıklama</label>
                            <br>
                            <input type="radio" name="TIME_FORMAT" value="BETWEEN">
                            <label for="BETWEEN">Aralıklı Saat (09:00 - 13:00)</label><br>
                            <input type="radio" name="TIME_FORMAT" value="DISTINCT">
                            <label for="DISTINCT">Tam Saat (17:10)</label><br>
                        </div>
                        <input type="hidden" name="insertType" value="Category">
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>