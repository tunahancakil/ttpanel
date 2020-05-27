<?php include "header.php"; ?>
<section id="page" class="offcanvas-pusher" role="main">
    <div id="drilldown"></div>
        <form action="save/add_order.php" method="post" id="invoice-send-form">
        <div class="container">
            <div class="row mtb20">
                <a href="#"><img src="../uploads/logo.png" title="" alt="" class="center-block"></a>
            </div>
        </div>
        <div class="linebox p20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 mbottom40 col-m64-6">
                        <div class="greybg bordergrey p20">
                            <p class="fs16 mbottom20"><strong>Gönderici Bilgileri</strong></p>
                            <div class="alert alert-danger customerrorbox" role="alert">
                            </div>
                            <div class="form-group">
                                <label>Ad Soyad <span class="req">*</span></label>
                                <input type="text" class="form-control" placeholder="Ad Soyad" name="SENDER_NAME" value="">
                            </div>
                            <div class="form-group">
                                <label>Telefon Numarası <span class="req">*</span></label>
                                <input type="text" class="form-control" placeholder="Telefon Numarası" name="SENDER_PHONE" value="">
                            </div>
                            <div class="form-group">
                                    <label>E-posta Adresi <span class="req">*</span></label>
                                    <input type="text" class="form-control" placeholder="E-posta Adresi" name="SENDER_EMAIL" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 mbottom40 col-m64-6">
                        <div class="greybg bordergrey p20">
                            <p class="fs16 mbottom20"><strong>Fatura Bilgileri</strong></p>
                            <div class="row mbottom5">
                                <div class="col-xs-6">
                                    <div class="pretty p-icon p-round mbottom20">
                                        <input type="radio" name="INVOICE_TYPE" value="0" class="faturatipilinsahis">
                                        <div class="state p-primary-o">
                                            <i class="icon mdi mdi-check"></i>
                                            <label>Şahıs Adına</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="pretty p-icon p-round mbottom20">
                                        <input type="radio" name="INVOICE_TYPE" value="1"  class="faturatipilinfirma">
                                        <div class="state p-primary-o">
                                            <i class="icon mdi mdi-check"></i>
                                            <label>Firma Adına</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sahis">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>T.C. Kimlik Numarası</label>
                                            <input type="text" class="form-control" placeholder="T.C. Kimlik Numarası" name="INVOICE_IDENTY_NO" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Fatura Adresi</label>
                                            <textarea class="form-control" placeholder="Fatura Adresi" name="INVOICE_ADDRESS"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="firma" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Firma Adı</label>
                                            <input type="text" class="form-control" placeholder="Firma Adı" name="COMPANY_NAME">
                                        </div>
                                        <div class="form-group">
                                            <label>Vergi Dairesi</label>
                                            <input type="text" class="form-control" placeholder="Vergi Dairesi" name="TAX_OFFICE">
                                        </div>
                                        <div class="form-group">
                                            <label>Vergi Numarası</label>
                                            <input type="text" class="form-control" placeholder="Vergi Numarası" name="COMPANY_INVOICE_IDENTY_NO">
                                        </div>
                                        <div class="form-group">
                                            <label>Fatura Adresi</label>
                                            <textarea class="form-control" placeholder="Fatura Adresi" name="COMPANY_INVOICE_ADDRESS"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-m64-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="fs16 mbottom20 ornline"><strong>Sepetiniz</strong></p>
                            </div>
                        </div>
                                                    <div class="row">

                                <div class="col-xs-12 col-lg-3 col-m64-4 col-m48-4 col-m32-4 ">
                                    <a href="javascript:void(0)" class="img front"><img src="../uploads/2019/10/1-thumb-cs106-877.jpg" title="" alt="" class="img-responsive w100"></a>
                                </div>
                                <div class="col-xs-12 col-lg-9 col-m64-8 col-m48-8 col-m32-8">
                                    <p class="name"><a href="javascript:void(0)">Seramikte Kırmızı Güller</a></p>
                                                                            <div class="row fs11">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Avcılar - Cihangir Mahallesi - 25/05/2020</div>
                                        </div>

                                                                            <div class="row mt10">
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>KDV Dahil:</strong></div>
                                        <div class="col-lg-6 col-md-5 col-sm-6 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="birimfiyat">112,10</span> TL</strong></div>
                                    </div>
                                                                        <div class="row totaldiv">
                                        <div class="col-lg-6 col-md-7 col-sm-5 col-xs-8 col-m32-7 col-m48-7 col-m64-8"><strong>Toplam Tutar:</strong></div>
                                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-4 col-m32-5 col-m48-5 col-m64-4"><strong><span class="toplamfiyat">112,10</span> TL</strong></div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 mtb20">
                    <a href="message.php" class="btn buybtn" role="button">GERİ</a>
                </div>
                <div class="col-lg-6 col-xs-6 mtb20">
                    <button type="submit" name="invoice" class="btn pull-right invoice-send buybtn">İLERLE</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h4>© 2020 Çiçek Filem. Tüm Hakları Saklıdır <a href="../page.php?title='mesafeli_satis_sozlesme'" target="_blank">Hizmet Sözleşmesi</a></h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
    </form>
</section> 

<script type="text/javascript">
    $(document).ready(function () {

        $(".faturatipilinsahis").on("click", function () {
            $("#faturatipi").val("1");
            $("#sahis").css("display", "block");
            $("#firma").css("display", "none");
        });
        $(".faturatipilinfirma").on("click", function () {
            $("#faturatipi").val("2");
            $("#sahis").css("display", "none");
            $("#firma").css("display", "block");
        });



        $(".invoice-send").click(function () {

            $.extend($.validator.messages, {
                required: "Bu alan gereklidir",
                maxlength: $.validator.format("En fazla {0} karakter girin"),
                minlength: $.validator.format("En az {0} karakter girin"),
                rangelength: $.validator.format("En az {0} ve en fazla {1} karakter girin"),
                email: "Geçerli bir mail adresi girin",
                url: "Geçerli bir URL girin",
                date: "Geçerli bir tarih girin",
                number: "Geçerli bir rakam girin",
                digits: "Sadece rakam girin",
                equalTo: "Değerler eşit olmalıdır",
                range: $.validator.format("{0} ile {1} arasında değer girin"),
                max: $.validator.format("{0} 'dan büyük değer girin"),
                min: $.validator.format("{0} 'dan küçük değer girin")
            });

            $('#invoice-send-form').validate({// initialize the plugin
                errorClass: "authError",
                errorElement: "label"
            });

            $('[name^="adsoyadfatura"]').each(function () {
                $(this).rules('add', {
                    required: true
                });
            });

            $('[name^="epostafatura"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    email: true
                });
            });

            $('[name^="telfatura"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 12
                });
            });

        });

        $('#mytab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

    });
    </script> 
<div id="fb-root" class=" fb_reset">
<div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body></html>