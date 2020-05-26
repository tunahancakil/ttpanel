<?php include "header.php" ?>
<section id="page" class="offcanvas-pusher" role="main">
    <div id="drilldown"></div>
        <form action="message.php" method="POST">
        <input type="hidden" name="alicibilgileri" value="1">
        <div class="container">
            <div class="row mtb20">
                <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
            </div>
        </div>
        <div class="linebox p20">
            <div class="container">
                    <div class="row mbottom20">
                        <div class="col-lg-8 col-sm-8 col-m64-12 col-m48-12 col-m32-12 mbottom40">
                            <div class="greybg p20 bordergrey">
                                <p class="fs16 mbottom20"><strong>Alıcı Bilgileri</strong></p>
                                <div class="alert alert-danger customerrorbox" role="alert">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Alıcının Adı Soyadı <span class="req">*</span></label>
                                            <input type="text" class="form-control" placeholder="Alıcının Adı Soyadı" name="CUSTOMER_NAME_SURNAME">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon Numarası <span class="req">*</span></label>
                                            <input type="text" class="form-control tels" placeholder="Telefon Numarası" name="CUSTOMER_PHONE">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Gönderilecek Yer</label>
                                            <select class="form-control" name="PLACE">
                                                <option value="Ev">Ev</option>
                                                <option value="İş Yeri / Şirket" data-title="İş Yeri / Şirket">İş Yeri / Şirket</option>
                                                <option value="Okul" data-title="Okul">Okul</option>
                                                <option value="Hastane" data-title="Hastane">Hastane</option>
                                                <option value="Diğer">Diğer</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Adres <span class="req">*</span></label>
                                            <textarea class="form-control" placeholder="Adres" name="CUSTOMER_ADDRESS"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-m64-12 col-m48-12 col-m32-12 pull-right">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="fs16 mbottom20 ornline"><strong>Sepetiniz</strong></p>
                                </div>
                                <div class="col-lg-3 col-m64-3 col-m48-3 col-m32-3">
                                    <a href="javascript:void(0)" class="img front"><img src="..//uploads/2019/10/1-thumb-cs106-877.jpg" title="" alt="" class="img-responsive w100"></a>
                                </div>
                                <div class="col-lg-9 col-m64-9 col-m48-9 col-m32-9">
                                    <p class="name"><a href="javascript:void(0)">
                                        <?php
                                            if(!empty($_SESSION["shopping_cart"])) {
                                            $total = 0;
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                                            {   
                                                echo $values["item_name"];
                                            }
                                        }
                                        ?>
                                        </a></p>
                                        <div class="row fs11">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Avcılar - Cihangir Mahallesi - 25/05/2020</div>
                                        </div>
                                        <div class="row mt10">
                                        <div class="col-lg-6 col-md-8 col-sm-7 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>KDV Dahil:</strong></div>
                                        <div class="col-lg-6 col-md-4 col-sm-5 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="birimfiyat">                                        <?php
                                            if(!empty($_SESSION["shopping_cart"])) {
                                            $total = 0;
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                                            {
                                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                                echo $total;
                                            }
                                        }
                                        ?></span> TL</strong></div>
                                        </div>
                                        <div class="row totaldiv">
                                        <div class="col-lg-6 col-md-8 col-sm-7 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>Toplam Tutar:</strong></div>
                                        <div class="col-lg-6 col-md-4 col-sm-5 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="toplamfiyat">
                                        <?php
                                            if(!empty($_SESSION["shopping_cart"])) {
                                            $total = 0;
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                                            {
                                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                                echo $total;
                                            }
                                        }
                                        ?>
                                        </span> TL</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 mtb20">
                    <a href="user_login.php" class="btn buybtn" role="button">GERİ</a>
                </div>
                <div class="col-lg-6 col-xs-6 mtb20">
                    <button type="submit" name="customer" class="btn pull-right receive-send buybtn">İLERLE</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h4>© 2020 TT Yazılım. Tüm Hakları Saklıdır <a href="..//mesafeli-satis-sozlesmesi" target="_blank">Hizmet Sözleşmesi</a></h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="pull-right">
                        <img src="..//themes/magnoliav2/image/payopt.png" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
</section> 
<script src="..//themes/magnoliav2/js/bootbox.min.js"></script>
<script class="iti-load-utils" async="" src="..//themes/magnoliav2/js/intlTelInput-utils.js"></script><div id="fb-root" class=" fb_reset">
<div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div>
</div>
</div>
</div>
</body>
</html>