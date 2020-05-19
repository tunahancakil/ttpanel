<?php include "product_header.php"?>    <div class="container">
    <div class="wrap-container transparent-bg">
        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ptop20">
                <div class="row">
                <?php
                    $sql = "select * from product where TITLE = '".$_GET['title']."'";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                ?>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class="item hidden-xs thmbs">
                            <img src="uploads/2019/10/3-thumb-q95-148.png" style="max-width:100px"  title="" alt="" data-zoom-image="https://www.cicekfilem.com/uploads/2019/10/7-thumb-q95-148.png" class="product-image-zoom thumbphoto" />
                            <img src="uploads/2019/10/3-thumb-q94-159.png" style="max-width:100px"  title="" alt="" data-zoom-image="https://www.cicekfilem.com/uploads/2019/10/7-thumb-q94-159.png" class="product-image-zoom thumbphoto" />
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="image">
                            <a href="uploads/2019/10/q95-148.png" class="for-mobile"><img src="uploads/2019/10/q95-148.png" title="" alt="" id="image" class="center-block"/></a>
                        </div>
                    </div>
                </div>
                <div class="item visible-xs visible-sm thmbs">
                    <img src="uploads/2019/10/3-thumb-q95-148.png" style=""  title="" alt="" data-zoom-image="https://www.cicekfilem.com/uploads/2019/10/7-thumb-q95-148.png" class="product-image-zoom thumbphoto" />
                    <img src="uploads/2019/10/3-thumb-q94-159.png" style=""  title="" alt="" data-zoom-image="https://www.cicekfilem.com/uploads/2019/10/7-thumb-q94-159.png" class="product-image-zoom thumbphoto" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ptop20">
                <div class="prodbox">
                    <div class="prodbox-header">
                        <?php echo $row['TITLE']?>
                    </div>
                    <div class="prodbox-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Şehir Seçin</label>
                                            <select class="form-control city">
                                                <option value="">Seçim Yapın</option>
                                                <option value="1">İstanbul-Avrupa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label>İlçe Seçin</label>
                                        <select class="form-control town" id="hiddentown">
                                            <option value="">Şehir Seçin</option>
                                        </select>
                                    </div>
                                    <input type="hidden" id="hiddentown" value="" />
                                    <input type="hidden" id="sendtype" />
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="pretty p-icon p-round mbottom20">
                                            <input type="checkbox" id="sube" name="sozlesme" value="1" class="sube" value="1" />
                                            <div class="state p-primary-o">
                                                <i class="icon mdi mdi-check"></i>
                                                <label>Şubeden Teslim Almak İstiyorum</label>
                                            </div>
                                        </div>
                                        <div class="subenot" style="display:none;">
                                            <div class="alert alert-info" role="alert">Tahtakale mahallesi. Fırat Caddesi No:2/A Avcılar/İstanbul Dükkan Tabela İsmi ( Bahçe Çiçek) </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row datex-box" style="display:none;">
                                    <div class="col-xs-4">
                                        <div class="datex today text-center" data-d="10-05-2020">
                                            <span webicon="stroke7:check" class="fw wh25"></span>
                                            <p>BUGÜN</p> <p class="fs13">(10/05/2020)</p>
                                        </div>
                                        <div class="clocktoday"></div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="datex tomorrow text-center" data-d="11-05-2020">
                                            <span webicon="stroke7:check" class="fw wh25"></span>
                                            <p>YARIN</p> <p class="fs13">(11/05/2020)</p>
                                        </div>
                                        <div class="clocktomorrow"></div>
                                    </div>
                                    <div class="col-xs-4 posinh">
                                        <div class="datex calc text-center">
                                            <span webicon="stroke7:check" class="fw wh25"></span>
                                            <p>TAKVİM</p><p class="fs13 custdate"></p>
                                        </div>
                                        <div class="calcdiv" style="display:none;"></div>
                                        <div class="clockcalc"></div>
                                    </div>
                                    <input type="hidden" name="datex" class="form-control date" id="deliverydate" />
                                    <input type="hidden" name="tmst" id="tmst" value="" />
                                    <div class="clockcont" style="display:none;">
                                        <div class="col-xs-12 col-md-12 mtop10 p0">
                                            <div class="productclockchangediv">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12" >
                                        <div id="fastsenddiv" style="display:none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="cargalert">
                                    <div class="alert alert-warning" role="alert"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="attr">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mtop20">
                                    <div class="col-xs-7 col-sm-6">
                                        <div class="price-cont">
                                            <div class="price-cart">
                                                <div class="price">
                                        <?php if (empty($row['DISCOUNT_PRICE'])) { echo '
                                            <div class="price-new"><span>'.substr($row['PRICE'],0,strpos($row['PRICE'], ".")).'</span> 
                                            <span><small>,'.substr($row['PRICE'],strpos($row['PRICE'], ".")).' TL<small></small>
                                            <small>+ KDV</small></small></span></div>';
                                        }else {
                                            echo '<div class="price-old"><span>'.substr($row['PRICE'],0,strpos($row['PRICE'], ".")).' </span> <span><small>,'.substr($row['PRICE'],strpos($row['PRICE'], ".")).' TL<small></small><small>+ KDV</small></small></span></div> 
                                            <div class="price-new"><span>'.substr($row['DISCOUNT_PRICE'],0,strpos($row['DISCOUNT_PRICE'], ".")).'</span> <span><small>,'.substr($row['DISCOUNT_PRICE'],strpos($row['DISCOUNT_PRICE'], ".")).' TL<small></small><small>+ KDV</small></small></span></div>';
                                        } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-6">
                                        <button class="button clearfix" id="button-cart">
                                            <span class="btn-text">SİPARİŞ VER</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prodbox-footer">
                        <div class="prodinfo mtop20 hidden-xs">
                            <div class="row ul">
                                <div class="col-sm-3">
                                    <li class="vcenter">
                                        <i class="mdi mdi-heart-outline"></i> DAİMA TAZE
                                    </li>
                                </div>
                                <div class="col-sm-3">
                                    <li class="vcenter">
                                        <i class="mdi mdi-currency-try"></i> EN UYGUN FİYAT
                                    </li>
                                </div>
                                <div class="col-sm-3">
                                    <li class="vcenter">
                                        <i class="mdi mdi-security"></i> GÜVENLİ ÖDEME
                                    </li>
                                </div>
                                <div class="col-sm-3">
                                    <li class="vcenter">
                                        <i class="mdi mdi-clock-fast"></i> AYNI GÜN TESLİMAT
                                    </li>
                                </div>
                            </div>
                        </div>
                        <img src="themes/magnoliav2/image/banks.png" class="center-block img-responsive mtop20" />
                        <p class="fs10 text-center">Tüm banka ve kredi kartlarıyla uyumlu 3D Secure ödeme sistemi ile güvenle ödeme yapabilirsiniz.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 hidden-xs">
                            <div class="share clearfix text-center mtop40">
                                <ul class="social prod-social">
                                    <li class="facebook"><a href="javascript:void(0);" onclick="$('.share-icon-facebook').click();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="javascript:void(0);" onclick="$('.share-icon-twitter').click();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="google-plus"><a href="javascript:void(0);" onclick="$('.share-icon-googleplus').click();"><i class="fa fa-google-plus"></i></a></li>
                                    <div class="prod-socialh" style="display: none"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="proddetbox">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo $row['DESCRIPTION']?>
            </div>
        </div>
    </div>
</div>
<div class="container">  
    <div class="row mtop40">
        <div class="col-sm-12 main-column">
            <div class="product-related box">
                <div class="linetext">SİZİN İÇİN ÖNERDİKLERİMİZ</div>
                <div class="owl-carousel owl-theme owl-carousel-main" data-itm="6">
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="image_container vcenter">
                                        <a href="phalanopsiz-beyaz-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-cs093-458.jpg" title="Phalanopsiz Beyaz Orkide" alt="Phalanopsiz Beyaz Orkide" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="phalanopsiz-beyaz-orkide.html" class="vcenter name vcenterparent">Phalanopsiz Beyaz Orkide</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-new"><span>75</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="image_container vcenter">
                                        <a href="cift-dalli-orkide-mor.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-cs026-062.jpg" title="Çift Dallı Orkide (Mor)" alt="Çift Dallı Orkide (Mor)" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="cift-dalli-orkide-mor.html" class="vcenter name vcenterparent">Çift Dallı Orkide (Mor)</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-new"><span>190</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="image_container vcenter">
                                        <a href="ciftli-beyaz-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-cs087-937.jpg" title="Çiftli Beyaz Orkide" alt="Çiftli Beyaz Orkide" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="ciftli-beyaz-orkide.html" class="vcenter name vcenterparent">Çiftli Beyaz Orkide</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-new"><span>180</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="product-label-special hidden-32 hidden-48"><span>%5</span></div>
                                    <div class="image_container vcenter">
                                        <a href="6-dal-beyaz-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-q96-806.png" title="6 Dal Beyaz Orkide" alt="6 Dal Beyaz Orkide" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="6-dal-beyaz-orkide.html" class="vcenter name vcenterparent">6 Dal Beyaz Orkide</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-old"><span>419</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div> 
                                            <div class="price-new"><span>399</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="product-label-special hidden-32 hidden-48"><span>%13</span></div>
                                    <div class="image_container vcenter">
                                        <a href="beyaz-phalanopsiz-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-cs023-354.jpg" title="Beyaz Phalanopsiz Orkide" alt="Beyaz Phalanopsiz Orkide" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="beyaz-phalanopsiz-orkide.html" class="vcenter name vcenterparent">Beyaz Phalanopsiz Orkide</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-old"><span>79</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div> 
                                            <div class="price-new"><span>69</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 no-padding">
                        <div class="product-block"> 
                            <div class="col-m32-6 p0">
                                <div class="image ">
                                    <div class="image_container vcenter">
                                        <a href="-mavi-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-q95-405.jpg" title=" Mavi Orkide" alt=" Mavi Orkide" class="img-responsive center-block" /></a>
                                    </div>                              
                                </div>
                            </div>
                            <div class="col-m32-6 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="-mavi-orkide.html" class="vcenter name vcenterparent"> Mavi Orkide</a>
                                <div class="group-item"> 
                                    <div class="price-cart">
                                        <div class="price text-center">
                                            <div class="price-new"><span>189</span> <span><small>,00 TL<small></small><small>+ KDV</small></small></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "product_footer.php"?>