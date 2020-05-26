<?php include ("header.php");
if (isset($_SESSION["shopping_cart"])) {
    if(count($_SESSION["shopping_cart"]) > 0)
    {       
        echo "<script>
        $('#cart ').addClass('highlight active');
        $('html, body').animate({scrollTop: 0}, 800);</script>"; 
    } 
}
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
        {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
            'item_id'                  =>  $_GET["id"],
            'item_name'                =>  $_POST["hidden_name"],
            'item_price'               =>  $_POST["hidden_price"],
            'item_delivery_clock'      =>  $_POST["hidden_clock"],
            'item_delivery_city'       =>  $_POST["hidden_city"],
            'item_delivery_district'   =>  $_POST["hidden_district"],
            'item_is_delivery'         =>  $_POST["hidden_is_delivery"],
            'item_quantity'            =>  $_POST["quantity"],
            'item_image'               =>  $_POST["productImage"],
            'item_customer_name'       =>  "",
            'item_customer_phone'      =>  "",
            'item_customer_address'    =>  "",
            'item_customer_place'      =>  "",
            'item_card_note_id'        =>  "",
            'item_custom_cart_notee'   =>  "",
            'item_sender_name'         =>  "",
            'item_sender_phone'        =>  "",
            'item_sender_email'        =>  "",
            'item_invoice_type'        =>  "",
            'item_invoice_identy_no'   =>  "",
            'item_invoice_address'     =>  "",
            'item_invoice_company_name'=>  "",
            'item_invoice_tax_office'  =>  "",
            'item_is_onlince_contract' =>  ""
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>window.location="product.php?id='.$_GET["id"].'"</script>';
            }
            else
            {   
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {   
                    if ($_GET["id"] == $values['item_id']) {
                        $_SESSION["shopping_cart"][$keys]['item_quantity'] = $_SESSION["shopping_cart"][$keys]['item_quantity'] + 1;
                        echo '<script>window.location="product.php?id='.$_GET["id"].'"</script>';
                    }
                }
            }
    
        }
    else
        {
            $item_array = array(
            'item_id'           =>  $_GET["id"],
            'item_name'         =>  $_POST["hidden_name"],
            'item_price'        =>  $_POST["hidden_price"],
            'item_quantity'     =>  $_POST["quantity"],
            'item_image'        =>  $_POST["productImage"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
        if($values["item_id"] == $_GET["id"])
        {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="product.php?id='.$_GET["id"].'"</script>';
        }
        }
    }
}
 
?>
<div class="container">
    <div class="wrap-container transparent-bg">
        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ptop20">
                <div class="row">
                <?php
                    if(isset($_GET['id'])) {
                    $sql = "select * from product where ID = ".$_GET['id']."";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                    }
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
                                            <input type="checkbox" id="sube" value="1" class="sube"/>
                                            <div class="state p-primary-o">
                                                <i class="icon mdi mdi-check"></i>
                                                <label>Şubeden Teslim Almak İstiyorum</label>
                                            </div>
                                        </div>
                                        <div class="subenot" >
                                            <div class="alert alert-info" role="alert">Tahtakale mahallesi. Fırat Caddesi No:2/A Avcılar/İstanbul Dükkan Tabela İsmi ( Bahçe Çiçek) </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row datex-box" style="display:none">
                                    <div class="col-xs-4">
                                        <div class="datex today text-center datex-slc" data-d="25-05-2020">
                                            <span webicon="stroke7:check" class="fw wh25 webicon svg-webicon" aria-hidden="true" style="display: block !important">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;">
                                            <path d="M16 2.672C8.64 2.672 2.672 8.64 2.672 16S8.64 29.328 16 29.328c7.36 0 13.328-5.967 13.328-13.328S23.36 2.672 16 2.672zm0 25.59c-6.76 0-12.262-5.5-12.262-12.262S9.238 3.738 16 3.738c6.76 0 12.262 5.5 12.262 12.262S22.762 28.262 16 28.262z"></path>
                                            <path d="M22.667 11.24l-8.56 8.3-2.997-2.998c-.312-.312-.818-.312-1.13 0s-.313.818 0 1.13l3.554 3.556c.156.156.36.234.565.234.2 0 .4-.075.555-.225l9.124-8.848c.316-.31.324-.815.017-1.132-.31-.318-.814-.325-1.13-.018z"></path>
                                            </svg></span>
                                            <p>BUGÜN</p> <p class="fs13">(25/05/2020)</p>
                                        </div>
                                        <div class="clocktoday"><div class="clockcont" style="display: block;">
                                            <div class="col-xs-12 col-md-12 mtop10 p0">
                                                <div class="productclockchangediv" style="display: block;">
                                                    <div style="display:none" class="debug">
                                                    set sql_mode=''; select clocks.* from cityclock  left join clocks on clocks.id = cityclock.clockid  where cityclock.cityid = '1' order by clocks.startc, clocks.finishc asc 
                                                    </div>
                                                <div class="form-group">
                                                    <select class="form-control deliveryclock slccust" name="deliveryclock">
                                                        <option value="">Saat Seçin</option>
                                                        <option value="18:00 - 21:00">18:00 - 21:00 arası</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="datex tomorrow text-center" data-d="26-05-2020">
                                        <span webicon="stroke7:check" class="fw wh25 webicon svg-webicon" aria-hidden="true" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;"><path d="M16 2.672C8.64 2.672 2.672 8.64 2.672 16S8.64 29.328 16 29.328c7.36 0 13.328-5.967 13.328-13.328S23.36 2.672 16 2.672zm0 25.59c-6.76 0-12.262-5.5-12.262-12.262S9.238 3.738 16 3.738c6.76 0 12.262 5.5 12.262 12.262S22.762 28.262 16 28.262z"></path><path d="M22.667 11.24l-8.56 8.3-2.997-2.998c-.312-.312-.818-.312-1.13 0s-.313.818 0 1.13l3.554 3.556c.156.156.36.234.565.234.2 0 .4-.075.555-.225l9.124-8.848c.316-.31.324-.815.017-1.132-.31-.318-.814-.325-1.13-.018z"></path></svg></span>
                                        <p>YARIN</p> <p class="fs13">(26/05/2020)</p>
                                    </div>
                                    <div class="clocktomorrow"></div>
                                </div>
                                <div class="col-xs-4 posinh">
                                    <div class="datex calc text-center">
                                                <span webicon="stroke7:check" class="fw wh25 webicon svg-webicon" aria-hidden="true" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;"><path d="M16 2.672C8.64 2.672 2.672 8.64 2.672 16S8.64 29.328 16 29.328c7.36 0 13.328-5.967 13.328-13.328S23.36 2.672 16 2.672zm0 25.59c-6.76 0-12.262-5.5-12.262-12.262S9.238 3.738 16 3.738c6.76 0 12.262 5.5 12.262 12.262S22.762 28.262 16 28.262z"></path><path d="M22.667 11.24l-8.56 8.3-2.997-2.998c-.312-.312-.818-.312-1.13 0s-.313.818 0 1.13l3.554 3.556c.156.156.36.234.565.234.2 0 .4-.075.555-.225l9.124-8.848c.316-.31.324-.815.017-1.132-.31-.318-.814-.325-1.13-.018z"></path></svg></span>
                                                <p>TAKVİM</p><p class="fs13 custdate"></p>
                                    </div>
                                    <div class="calcdiv" style="display:none;"></div>
                                    <div class="clockcalc"></div>
                                </div>
                                    <input type="hidden" name="datex" class="form-control date" id="deliverydate" value="25-05-2020">
                                    <input type="hidden" name="tmst" id="tmst" value="">    
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
                                        <?php if (empty($row['DISCOUNT_PRICE'])) {echo '
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
                                    <?php       if(isset($_GET['id'])) {
                                                    $sql_product_image    = "select * from product_image where PRODUCT_ID = ".$_GET['id']." and IS_MAIN_IMAGE = 1";
                                                    $result_product_image = mysqli_query($conn,$sql_product_image);
                                                    $row_product_image    = mysqli_fetch_assoc($result_product_image);
                                                }?>
                                            <form method="post" action="product.php?action=add&id=<?php echo $row["ID"]; ?>">
                                                <input type="hidden" name="quantity" value="1" class="form-control">
                                                <input type="hidden" name="deliveryCity" value="1" class="form-control">
                                                <input type="hidden" name="deliveryDistrict" value="1" class="form-control">
                                                <input type="hidden" name="deliveryDay" value="1" class="form-control">
                                                <input type="hidden" name="deliveryClock" value="1" class="form-control">
                                                <input type="hidden" name="productImage" value="<?php echo $row_product_image['IMAGE_ID']?>" class="form-control">
                                                <input type="hidden" name="hidden_name" value="<?php echo $row["TITLE"];?>">
                                                <?php if (empty($row['DISCOUNT_PRICE'])) {?>
                                                <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>">
                                                <?php } else { ?>
                                                <input type="hidden" name="hidden_price" value="<?php echo $row["DISCOUNT_PRICE"]; ?>">
                                                <?php }; ?>
                                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Sepete Ekle" />
                                                </div>
                                            </form>
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
<?php include "footer.php"?>