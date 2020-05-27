<?php include "header.php" ?>
    <section id="page" class="offcanvas-pusher" role="main">
        <div id="drilldown"></div>
        <form action="save/add_order.php" method="post">
            <input type="hidden" name="ekurunler" value="1">
            <div class="container">
                <div class="row mtb20">
                    <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
                </div>
            </div>
            <div class="greybg p20 fs14">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-lg-2 col-sm-2 col-m64-2 col-m48-4 col-m32-4">
                                    <div class="image">
                                        <div class="image_container">
                                            <a href="javascript:void(0)" class="img front"><img src="../uploads/2019/10/1-thumb-cs106-877.jpg" title="" alt="" class="img-responsive "></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item" id="prod-15" total="112.1" addprototal="0">
                                    <div class="col-lg-5 col-sm-5 col-m64-4 col-m48-8 col-m32-8">
                                        <p class="name fs16"><a href="javascript:void(0)">Seramikte Kırmızı Güller</a></p>
                                        <div class="row dynbox">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 col-m64-6 col-m48-8 col-m32-12">
                                        <div class="row mbottom5">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Avcılar - Cihangir Mahallesi - 25/05/2020</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8 col-m32-7 col-m48-7 col-m64-6"><strong>KDV Dahil:</strong></div>
                                            <div class="col-lg-6 col-md-5 col-sm-4 col-xs-4 col-m32-5 col-m48-5 col-m64-6"><strong><span class="birimfiyat">112,10</span> TL</strong></div>
                                        </div>
                                        <div class="row totaldiv">
                                            <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8 col-m32-7 col-m48-7 col-m64-6"><strong>Toplam Tutar:</strong></div>
                                            <div class="col-lg-6 col-md-5 col-sm-4 col-xs-4 col-m32-5 col-m48-5 col-m64-6"><strong><span class="toplamfiyat">112,10</span> TL</strong></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 mtop20">
                                                <button type="submit" name="checkout" class="btn pull-left buybtn">İLERLE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mtb20">
                        <button type="submit" name="checkout" class="btn pull-right buybtn">İLERLE</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h4>© 2020 TT Yazılım. Tüm Hakları Saklıdır <a href="../page.php?title='mesafeli_satis_sozlesme'" target="_blank">Hizmet Sözleşmesi</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="pull-right">
                            <img src="../themes/magnoliav2/image/payopt.png" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="../themes/magnoliav2/js/bootbox.min.js"></script>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>
</body>
</html>