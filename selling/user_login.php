<?php include "header.php" 

?>

    <section id="page" class="offcanvas-pusher" role="main">
        <div id="drilldown"></div>    
        <div class="container">
            <div class="row mtb20">
                <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
            </div>
        </div>
        <div class="linebox p20 fs11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mbottom40 col-sm-6 col-lg-offset-3 col-sm-offset-3">
                        <div class="greybg bordergrey login-form-div p20">
                            <p class="fs16 mbottom20"><strong>Üye Girişi</strong></p>
                            <form action="" method="post" id="login-form">
                                <div class="alert alert-danger customerrorbox" role="alert"></div>
                                <div class="form-group">
                                    <label>E-posta Adresi</label>
                                    <input type="email" name="username" class="form-control" placeholder="E-posta Adresi">
                                </div>
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input type="password" name="password" class="form-control" placeholder="******">
                                </div>
                                <input type="hidden" name="giris" value="1">

                                <div class="clearfix">
                                    <a href="javascript:void(0);" class="text-danger return-forget pull-right mbottom20">
                                        <i class="fa fa-angle-right"></i>&nbsp;<strong>Şifremi Unuttum</strong>
                                    </a> 
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn buybtn login-btn center-block">
                                            Giriş Yap</button>
                                                                </div>
                            </form>
                            <div class="clearfix">
                                <form action="customer_info.php" method="post"> 
                                    <input type="hidden" name="kullanicigiris" value="1">
                                    <button type="submit" class="btn buybtn2 continueguestbtn center-block">Üye Olmadan Devam Et</button>
                                </form>
                            </div>

                        </div>
                        <!--
                        <div class="greybg bordergrey forget-form-div p20">
                            <p class="fs16 mbottom20"><strong>Şifremi Unuttum</strong></p>
                            <form action="" method="post" id="forget-form">
                                <div class="alert alert-danger customerrorbox" role="alert">
                                                                </div>
                                <div class="form-group">
                                    <label>Sisteme Kayıtlı E-posta Adresi</label>
                                    <input type="email" name="usernamef" class="form-control" placeholder="Sisteme Kayıtlı E-posta Adresi">
                                </div>

                                <input type="hidden" name="hatirlat" value="1">

                                <div class="clearfix">
                                    <a href="javascript:void(0);" class="text-danger return-login pull-right mbottom20">
                                        <i class="fa fa-angle-right"></i>&nbsp;<strong>Giriş Ekranı</strong>
                                    </a> 
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn buybtn forget-btn center-block">
                                        Şifreyi Sıfırla                                </button>
                                </div>
                            </form>
                        </div>
                        -->
                    </div>
                                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mtb20">
                    <a href="../satinal/ek-urunler" class="btn buybtn" role="button">GERİ</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h4>© 2020 TT Yazılım. Tüm Hakları Saklıdır <a href="../mesafeli-satis-sozlesmesi" target="_blank">Hizmet Sözleşmesi</a></h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="pull-right">
                        <img src="../themes/magnoliav2/image/payopt.png" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body></html>