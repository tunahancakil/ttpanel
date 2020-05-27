<?php include "header.php"; ?>
    <section id="page" class="offcanvas-pusher" role="main">
        <div id="drilldown"></div>
            <form action="save/add_order.php" method="post" id="pay-send-form">
            <input type="hidden" name="odemeform" value="1">
                        <input type="hidden" name="paytype" id="paytype" value="1">
                        <div class="container">
                <div class="row mtb20">
                    <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
                </div>
            </div>
            <div class="linebox p20">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-8 mbottom40">
                            <div class="greybg bordergrey p20">
                                <div role="tabpanel">
                                    <div class="responsive-tabs-container accordion-xs"><ul class="nav nav-tabs responsive resptabs" role="tablist" id="paytab">
                                        <li class="active"><a href="#kart" class="paytypelincard" v="1"><span class="fa fa-credit-card"></span> <strong>KART İLE ÖDEME</strong></a></li>
                                        <li><a href="#havale" class="paytypelineft" v="2"><span class="fa fa-exchange"></span> <strong>HAVALE İLE ÖDEME</strong></a></li>
                                        </ul>
                                        <div class="tab-content responsive">

                                        <a href="#kart" class="paytypelincard accordion-link active first" v="1"><span class="fa fa-credit-card"></span> <strong>KART İLE ÖDEME</strong></a><div class="tab-pane active" id="kart">
                                            <div class="row">
                                                    <!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
                                                    <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
                                                    <iframe src="https://www.paytr.com/odeme/guvenli/8eabd8841305eeece0b57555ffc005db79c8e44bcddb0fed0e45527bd4b7dbf8" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%; overflow: hidden; min-height: 600px;"></iframe>
                                                    <script>iFrameResize({}, '#paytriframe');</script>
                                                    <!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->
                                            </div>
                                            <h2><strong><span class="text-danger">Toplam Tutar:</span> 112,10 TL</strong></h2>
                                            <button type="submit" name = "paymentCard" class="btn buybtn pay-send-card btn-lg">ÖDEME YAP</button>
                                        </div>
                                        <a href="#havale" class="paytypelineft accordion-link last" v="2"><span class="fa fa-exchange"></span> <strong>HAVALE İLE ÖDEME</strong></a><div class="tab-pane" id="havale">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="alert alert-danger customerrorbox" role="alert">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label>Banka Seçin</label>
                                                        <select class="form-control havalebanka" name="havalebanka">
                                                        <option value="">Seçim Yapın</option>
                                                        <?php 
                                                            include "../ttadmin/connect/connection.php";
                                                            $sql_bank = "select * from bank where ACTIVE = 1";
                                                            $result_bank = mysqli_query($conn,$sql_bank);
                                                            while($row_bank=mysqli_fetch_array($result_bank)) {
                                                           
                                                        ?>
                                                            <option value="<?php echo $row_bank['ID'] ?>" sube="<?php echo $row_bank['DEPARTMENT_NO'] ?>" hesap="<?php echo $row_bank['ACCOUNT_NO'] ?>" 
                                                            iban="<?php echo $row_bank['IBAN'] ?>" alici="<?php echo $row_bank['ACCOUNT_NAME'] ?>"><?php echo $row_bank['BANK_NAME'] ?></option>
                                                        <?php 
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="havalebankainfo">                                                        
                                                        <p><strong>Hesap Adı:</strong> <span class="alici"></span></p>
                                                        <p><strong>Şube Adı:</strong> <span class="sube"></span></p>
                                                        <p><strong>Hesap No:</strong> <span class="hesap"></span></p>
                                                        <p><strong>IBAN:</strong> <span class="iban"></span></p>
                                                    </div>
                                                    <p>Havale veya EFT işlemini yaparken açıklama kısmına sipariş numaranızı yazınız.</p>
                                                    <p>Ödemenizi en geç 3 gün içerisinde gerçekleştirmediğiniz takdirde, siparişiniz otomatik olarak iptal olacaktır.</p>
                                                    <p>Havale veya EFT işlemini yaparken açıklama kısmına sipariş numaranızı yazınız.</p>
                                                    <p>Siparişinizi tamamlamak için "Sipariş Ver" butonuna basınız.</p>
                                                    <h2><strong><span class="text-danger">Toplam Tutar:</span> 112,10 TL</strong></h2>
                                                    <button type="submit" name = "paymentTransfer" class="btn buybtn pay-send-eft btn-lg">SİPARİŞ VER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="fs16 mbottom20 ornline"><strong>Sepetiniz</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-xs-12 col-lg-3 col-sm-2 col-m64-4 col-m48-4 col-m32-4 ">
                                        <a href="javascript:void(0)" class="img front"><img src="../uploads/2019/10/1-thumb-cs106-877.jpg" title="" alt="" class="img-responsive w100"></a>
                                    </div>
                                    <div class="col-xs-12 col-lg-9 col-sm-10 col-m64-8 col-m48-8 col-m32-8">
                                        <p class="name"><a href="javascript:void(0)">Seramikte Kırmızı Güller</a></p>
                                                                                <div class="row fs11">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Avcılar - Cihangir Mahallesi - 25/05/2020</div>
                                            </div>
                                                                                <div class="row mt10">
                                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>KDV Dahil:</strong></div>
                                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="birimfiyat">112,10</span> TL</strong></div>
                                        </div>
                                                                            <div class="row totaldiv">
                                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>Toplam Tutar:</strong></div>
                                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="toplamfiyat">112,10</span> TL</strong></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <hr>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row mtb20">
                        <div class="col-lg-12">
                            <div class="greybg bordergrey p20">
                                <div class="pretty p-icon p-round mbottom20">
                                    <input type="checkbox" id="sozlesme" name="IS_ONLINE_CONTRACT" value="1">
                                    <div class="state p-primary-o">
                                        <i class="icon mdi mdi-check"></i>
                                        <label>Mesafeli satış sözleşmesini okudum, kabul ediyorum.</label>
                                    </div>
                                </div>
                                <div class="sozlesme-div">
                                    Sözleşme gelecek
                                </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mtb20">
                        <a href="../satinal/fatura-bilgileri" class="btn buybtn" role="button">GERİ</a>
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
    <script type="text/javascript">
                                                    $(document).ready(function () {

                                                        $(document).on('click', ".paytypelincard", function () {
                                                            $("#paytype").val("1");
                                                        });
                                                        $(document).on('click', ".paytypelineft", function () {
                                                            $("#paytype").val("2");
                                                        });

                                                        $("#kartno").keyup(function () {
                                                            var val = $(this).val();
                                                            var newval;
                                                            newval = val.replace(/[_-]|\s/g, '');
                                                            if (newval.length >= 6 && $("#cardbrand").html() == "") {
                                                                newval = newval.substring(0, 6);
                                                                var postvar = "bin=" + newval;
                                                                ajax("POST", "../ajaxhelper.php", postvar, "#cardbrand", function (data) {
                                                                    if ($.trim(data) != "") {
                                                                        var st = data.split("-");
                                                                        $('#cardbrand').css("display", "block");
                                                                        if (st[1] != "") {
                                                                            $('#cardbrand').prepend("<div class='cardicon " + st[1] + "'></div>");
                                                                        }

                                                                        if (st[0] != "") {
                                                                            $('#cardbrand').prepend("<div class='cardicon " + st[0] + "'></div>");
                                                                            var postvar2 = "bn=" + st[0];
                                                                            ajax("POST", "../ajaxhelper.php", postvar2, "#taksit", function (data2) {
                                                                                if ($.trim(data2) != "") {
                                                                                    $("#instalnote").css("display", "none");
                                                                                    $('#taksit').html(data2);
                                                                                    $('#taksit').css("display", "block");
                                                                                }
                                                                            });
                                                                        }
                                                                    }
                                                                });
                                                            }
                                                            if (newval.length < 6) {
                                                                $("#cardbrand").html("");
                                                                $("#instalnote").css("display", "block");
                                                                $('#taksit').html("");
                                                                $('#taksit').css("display", "none");
                                                            }
                                                        });

                                                        $(".havalebanka").change(function () {
                                                            if ($(this).val() != "") {
                                                                var sube = $('option:selected', this).attr("sube");
                                                                var iban = $('option:selected', this).attr("iban");
                                                                var alici = $('option:selected', this).attr("alici");
                                                                var hesap = $('option:selected', this).attr("hesap");
                                                                $(".havalebankainfo").css("display", "block");
                                                                $(".havalebankainfo").find(".alici").html(alici);
                                                                $(".havalebankainfo").find(".sube").html(sube);
                                                                $(".havalebankainfo").find(".iban").html(iban);
                                                                $(".havalebankainfo").find(".hesap").html(hesap);
                                                            } else {
                                                                $(".havalebankainfo").css("display", "none");
                                                            }
                                                        });

                                                        $(".pay-send-card").click(function () {
                                                            $("#pay-send-form").validate({
                                                                rules: {
                                                                    kartowner: {required: true},
                                                                    kartno: {required: true},
                                                                    kartay: {required: true},
                                                                    kartyil: {required: true},
                                                                    cvv: {required: true},
                                                                    sozlesme: {required: true}
                                                                },
                                                                showErrors: function (errorMap, errorList) {
                                                                    $("#kart .customerrorbox").html("Lütfen gerekli alanı doldurun ve sözleşmeyi okuyup kabul edin");
                                                                    if (this.numberOfInvalids() > 0) {
                                                                        $("#kart .customerrorbox").show();
                                                                    } else {
                                                                        $("#kart .customerrorbox").hide();
                                                                    }
                                                                },
                                                                errorPlacement: function (error, element) {
                                                                    return false;
                                                                }
                                                            });
                                                        });


                                                        $(".pay-send-eft").click(function () {
                                                            $("#pay-send-form").validate({
                                                                rules: {
                                                                    havalebanka: {required: true},
                                                                    sozlesme: {required: true}
                                                                },
                                                                showErrors: function (errorMap, errorList) {
                                                                    $("#havale .customerrorbox").html("Lütfen gerekli alanı doldurun ve sözleşmeyi okuyup kabul edin");
                                                                    if (this.numberOfInvalids() > 0) {
                                                                        $("#havale .customerrorbox").show();
                                                                    } else {
                                                                        $("#havale .customerrorbox").hide();
                                                                    }
                                                                },
                                                                errorPlacement: function (error, element) {
                                                                    return false;
                                                                }
                                                            });
                                                        });

                                                        $('#paytab a').click(function (e) {
                                                            e.preventDefault();
                                                            $(this).tab('show');
                                                        });

                                                        $('.resptabs').responsiveTabs({
                                                            accordionOn: ['xs']
                                                        });

                                                    });
        </script> 



    <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body></html>