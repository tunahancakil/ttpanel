<?php include "product_header.php"?>
  <div class="container">
    <div class="wrap-container transparent-bg">
        <div class="row">
        <section id="columns" class="offcanvas-siderbars">
        <div class="container">
            <div class="row mtop40">
                <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 mb50">
                    <h2>Üyelik Kayıt Formu</h2>
                    <div class="row">
                        <div class="content2 col-lg-8 col-md-12 col-sm-12 col-xs-12"> 
                            <form action="process/insert.php" method="post">
                                <div class="alert alert-danger customerrorbox" role="alert"></div>
                                <input type="hidden" name="token" value="00deb16f577838e5c37678899d2bd8de" />
                                <div class="form-group">
                                    <label for="bf1">Adınız Soyadınız <span class="req">*</span></label>
                                    <input type="text" class="form-control" id="bf1" placeholder="Adınız Soyadınız" name="NAMESURNAME" required />
                                </div>
                                <div class="form-group">
                                    <label for="bf2">E-posta Adresiniz <span class="req">*</span></label>
                                    <input type="email" class="form-control" id="bf2" placeholder="E-posta Adresiniz" name="EMAIL" required />
                                </div>
                                <div class="form-group">
                                    <label for="kkf5">Telefon Numarası <span class="req">*</span></label>
                                    <input type="text" class="form-control tels" id="bf5" placeholder="Telefon Numarası" name="PHONE" required/>
                                </div>
                                <div class="form-group">
                                    <label for="bf3">Şifre <span class="req">*</span></label>
                                    <input type="password" class="form-control" id="bf3" placeholder="******" name="PASSWORD1" required/>
                                </div>
                                <div class="form-group">
                                    <label for="bf4">Şifre Tekrarı <span class="req">*</span></label>
                                    <input type="password" class="form-control" id="bf4" placeholder="******" name="PASSWORD2" required/>
                                </div>
                                <div class="pretty p-icon p-round">
                                    <input type="checkbox" id="news" name="NEWS" value="1"/>
                                    <div class="state p-primary-o">
                                        <i class="icon mdi mdi-check"></i>
                                        <label>İndirim ve diğer promosyonlardan e-posta ve SMS ile haberdar olmak istiyorum</label>
                                    </div>
                                </div>
                                <input type="hidden" name="insertType" value="Member">
                                <div class="row mtop20">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn register-btn button-purp">
                                            <i class="fa fa-sign-in"></i>Kayıt Ol
                                        </button>
                                    </div>
								</div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12 hidden-xs">
                </div>
            </div>
        </div>
    </section>
    </div>
   </div>
</div>
<?php include "product_footer.php"?>


