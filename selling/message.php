<?php include "header.php"; ?>
        <section id="page" class="offcanvas-pusher" role="main">
            <div id="drilldown"></div>
                <form action="invoice.php" method="post">
                <div class="container">
                    <div class="row mtb20">
                        <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
                    </div>
                </div>
                <div class="linebox p20">
                        <div class="container">
                            <div class="row mbottom40">
                                <div class="col-lg-9 col-sm-12 mbottom40">
                                    <div class="greybg bordergrey p20">
                                        <p class="fs16 mbottom20"><strong>Kart Notunu Yazın</strong></p>
                                            <div class="form-group">
                                                <select name="CARD_ID" class="form-control">
                                                    <option value="0">Hazır Kart Mesajı Ekle</option>
                                                        <?php
                                                        include "../ttadmin/connect/connection.php";
                                                        $sql_message = "select * from card_note where ACTIVE = 1";
                                                        $result_message = mysqli_query($conn,$sql_message);
                                                        while($row_message=mysqli_fetch_array($result_message))
                                                        { ?>
                                                        <option value="<?php echo $row_message['ID']?>"><?php echo $row_message['CATEGORY']?></option>
                                                        <?php }?>
                                                </select>
                                            </div>
                                            <div class="cnsliderdiv mbottom20" style="display:none;">
                                                <span class="fa fa-chevron-left cnslider" data-route="p"></span>&nbsp;&nbsp;
                                                <span class="fa fa-chevron-right cnslider" data-route="n"></span>
                                            </div>
                                            <div class="cnsliderstack" style="display:none;"></div>
                                        <div class="form-group">
                                            <label>Karta Yazılacak Yazı</label>
                                            <textarea class="form-control" placeholder="Karta Yazılacak Yazı" name="CARD_NOTE" style="height:100px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Karta Yazılacak İsim</label>
                                            <input type="text" class="form-control" placeholder="Boş bırakıldığı takdirde isimsiz gönderilecek" name="CART_NAME" value="">
                                            </div>
                                        <div class="pretty p-icon p-round mbottom20">
                                            <input type="checkbox" name="NO_NAME" value="1">
                                            <div class="state p-primary-o">
                                                <i class="icon mdi mdi-check"></i>
                                                <label>Kart üzerinde ismim görünmesin</label>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="fs16 mbottom20 ornline"><strong>Sepetiniz</strong></p>
                                        </div>
                                        <div class="col-xs-12 col-lg-3 col-sm-4 col-m64-4 col-m48-4 col-m32-4">
                                            <a href="javascript:void(0)" class="img front"><img src="../uploads/2019/10/1-thumb-cs106-877.jpg" title="" alt="" class="img-responsive w100"></a>
                                        </div>
                                        <div class="col-xs-12 col-lg-9 col-sm-8 col-m64-8 col-m48-8 col-m32-8">
                                            <p class="name"><a href="javascript:void(0)">Seramikte Kırmızı Güller</a></p>
                                            <div class="" total="" addprototal="">
                                                    <div class="row fs11">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Avcılar - Cihangir Mahallesi - 25/05/2020</div>
                                                    </div>
                                                    <div class="row mt10">
                                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>KDV Dahil:</strong></div>
                                                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="birimfiyat">112,10</span> TL</strong></div>
                                                    </div>
                                                    <div class="row totaldiv">
                                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>Toplam Tutar:</strong></div>
                                                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="toplamfiyat">112,10</span> TL</strong></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mtb20 ptop20">
                                            <button type="submit" name="message" class="btn pull-right receive-send buybtn">İLERLE</button>
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
                            <button type="submit" name="message" class="btn pull-right receive-send buybtn">İLERLE</button>
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
        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
        <div>
        </div>
        </div>
        </div>
    </body>
    </html>