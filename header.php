<?php include "ttadmin/connect/connection.php";
$sql_settings    = "select * from settings where ACTIVE = 1";
$result_settings = mysqli_query($conn,$sql_settings);
$row_settings    = mysqli_fetch_assoc($result_settings);
session_start();
?>
<!doctype html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $row_settings['TITLE'];?>  </title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Çiçek Filem, Online Çiçekçi, Bahçeşehir Çiçekçi | 4 Dal Beyaz Orkide"/>
    <meta property="og:image" content="uploads/2019/10/q95-148.png" />
    <meta property="og:description" content=""/>
    <meta property="og:url" content="4-dal-beyaz-orkide.html"/>
    <meta name="google-site-verification" content="Gh2f7L-_GMyzG6i5JF43wlKyzOFwiG" />
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="uploads/favicon.png" type="image/x-icon" />
    <link href="themes/magnoliav2/css/bootstrap-min.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/stylesheet.css" rel="stylesheet" />
    <link href="themes/magnoliav2/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/animate.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/font-awesome.min.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="themes/magnoliav2/css/pretty-checkbox.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Oswald|Work+Sans|Quicksand|Livvic|Lexend+Deca|Montserrat|Dancing+Script" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="ttadmin/plugins/fontawesome-free/css/all.min.css">
    <script type="text/javascript" src="themes/magnoliav2/js/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/jquery/ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/common.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/jquery/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/sidebarEffects.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/ctDrillDown.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/wow.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="themes/magnoliav2/js/jquery-webicon.min.js"></script>
    <script>
        var base = "index.html";
        var src = "search";
        var area = "bolge";
        function openpp() {
            setTimeout(function () {
                $.fancybox.open('<a href="https://www.cicekfilem.com/adherent" style="display: inline-block; margin-top:100px;"><img src="https://www.cicekfilem.com/themes/magnoliav2/image/bn1.jpg" class="img-responsive center-block" /></a>', {
                    'autoDimensions': true,
                    'width': 'auto',
                    'height': 'auto',
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                });
            }, 2000);
        }
        $(document).ready(function () {
            var v = $.cookie('kdo1');
            if (v != 'y') {
            //openpp();
        }
        $.cookie('kdo1', 'y', {
            expires: 3
        });
        var ck = $.cookie('ckk');
        if (ck != 'y2') {
            $(".ckinf").show();
        }
        $(".ckinfok").click(function () {
            $(".ckinf").hide();
            $.cookie('ckk', 'y2', {
                expires: 3
            });
        });
    });
</script>
<script type="text/javascript" src="themes/magnoliav2/js/js.js"></script>
<div class="pruva-push--in-notification notifperm" style="top: 0px; display:none;">
    <div class="pruva-push--in-notification-inner-container">
        <div class="pruva-push--in-notification-logo"><p><img src="<?php echo $row_settings['LOGO']; ?>" alt="" /></p></div>
        <div class="pruva-push--in-notification-text-container">
            <div class="pruva-push--in-notification-title">Masaüstü bildirimlerine ekleyin</div>
            <div class="pruva-push--in-notification-description">Özel fırsatlardan ve güncel kampanyalardan haberiniz olsun ister misiniz?</div>
        </div>
        <div style="clear: both;">
            <div class="pruva-push--in-notification-button-container">
                <a target="_blank" onclick="reject();" class="pruva-push--in-notification-button pruva-push--in-disallow-button">Daha sonra</a>
                <a target="_blank" onclick="accept();" class="pruva-push--in-notification-button pruva-push--in-allow-button">Evet</a>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="themes/magnoliav2/css/jquery.fancybox.css" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5c72vw6Yp5COQtrqpVCNgFV9vyWQVGSI&amp;libraries=places" async defer></script>
<script src="themes/magnoliav2/js/jquery.share-min.js" type="text/javascript"></script>
<script src="themes/magnoliav2/js/clayfy.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="themes/magnoliav2/css/clayfy.css" />
<link rel="stylesheet" href="themes/magnoliav2/css/owl.carousel.css" />
<link rel="stylesheet" href="themes/magnoliav2/css/owl.theme.default.css" />
<script src="themes/magnoliav2/js/owl.carousel.min.js"></script>
</head>
<body id="offcanvas-container" class="nokeep-header offcanvas-container layout-fullwidth fs12 page-home ">
    <section id="page" class="offcanvas-pusher" role="main">
        <div class="st-container st-effect-1 st-menu-open" id="st-container">
            <div class="st-menu st-effect-1 mobile-menu" id="closemenu">
                <div class="skin-classic-light breadcrumbs"></div>
                <div id="drilldown" class="skin-classic-light">
                </div>
                <div class="skin-classic-light footer"><span id="current"></span><a href="#" id="back"><span>GERİ</span></a></div>
            </div>
        </div> 
        <div id="mobilesearchdiv"></div>
        <div id="header">
            <div id="topbar" class="vcenter2">
                <div class="container">
                    <div class="row vcenter2">
                        <div class="visible-xs visible-sm col-sm-2 col-m64-2 col-m48-2 col-m32-2">
                            <div id="st-trigger-effects">
                                <button class="btn btn-mobile btn-mobile-menu pull-left" data-effect="st-effect-1">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-4 col-sm-3 col-m64-4 col-m48-5 col-m32-5">
                            <a href="index.php">
                                <img src="<?php echo $row_settings['LOGO']; ?>" title="Çiçek Filem, Online Çiçekçi, Bahçeşehir Çiçekçi" alt="Çiçek Filem, Online Çiçekçi, Bahçeşehir Çiçekçi" class="logo" />
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-xs hidden-sm" id="mobilesearchtemp">
                            <div id="search">
                                <div class=" visible-xs visible-sm remove-search"><i class="fa fa-times"></i></div>
                                <form action="#" method="post" class="search-form">
                                    <div class="input-group">
                                        <input type="text" name="searchprod" id="searchprod" class="form-control" placeholder="Ürün Ara" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-ara startsearch" type="submit"><span class="wh35" style="vertical-align: middle;" webicon="ion:ios-search"></span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-xs hidden-sm">
                            <ul class="links pull-right">
                                <li class="order-form" id="desktop-order-form">
                                    <a href="javascript:void(0);" class="open-div vcenter">
                                        <span webicon="wpf:in-transit" style="color:#478eab;" class="wh35" title=""></span>
                                        <span class="hidden-xs hidden-sm hidden-md linkspan">Sipariş Takibi</span>
                                    </a>
                                    <div class="order-form-div col-lg-12 col-md-12 col-sm-12 col-xs-12 col-m64-12 col-m48-12 col-m32-12">
                                        <form action="selling/order_entry.php" method="post" id="order-query-form">
                                            <div class="alert alert-danger customerrorbox" role="alert"></div>
                                            <div class="form-group">
                                                <label>E-posta Adresi</label>
                                                <input type="email" name="username" class="form-control" placeholder="E-posta Adresi" />
                                            </div>
                                            <div class="form-group">
                                                <label>Sipariş Numarası</label>
                                                <input type="text" name="orderno" class="form-control" placeholder="Sipariş Numarası" />
                                            </div>
                                            <input type="hidden" name="siparistakip" value="1" />
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <button type="submit" class="btn order-query-btn button-purp">Sorgula</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="cont-form">
                                    <a href="<?php echo $row_settings['PHONE']; ?>" class="vcenter">
                                        <span webicon="wpf:assistant" style="color:#50bb70" class="wh35"></span>
                                        <span class="hidden-xs hidden-sm hidden-md linkspan"><strong>Destek Hattı</strong><br><?php echo $row_settings['PHONE']; ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mini-access visible-xs visible-sm pull-right posinh col-m32-5 col-m48-5 col-m64-6">
                            <ul>
                                <li class="user-login" id="mobile-user-login">
                                    <a href="javascript:void(0)" class="open-div"><span webicon="ion:android-person" class="wh24" style="color:#68bb61;" title=""></span></a>
                                </li>
                                <li id="cart" class="mobile-cart">
                                    <a href="javascript:void(0)" class="mini_cart"><span webicon="ion:bag" class="wh24" style="color:#f56180;" title=""></span></a>
                                    <div class="content col-sm-6 col-xs-6 col-m64-8 col-m48-8 col-m32-12">
                                        <div class="contents">
                                        </div>
                                    </div>
                                </li>
                                <li class="search">
                                    <a href="javascript:void(0)" class="">
                                        <span class="wh24" webicon="ion:ios-search"></span>
                                    </a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div id="header-main">
                <div class="container">
                    <div class="row">
                        <div class="m-menu col-lg-9 col-md-9 hidden-xs hidden-sm">
                            <ul class="menu vcenter2">
                                <?php
                                    $sql_menu    = "select * from menu where MENU_TYPE = 'HEADER' AND ACTIVE = 1";
                                    $result_menu = mysqli_query($conn,$sql_menu);
                                    $row_menu    = mysqli_fetch_assoc($result_menu);
                                    $json = json_decode($row_menu['MENU_TEMPLATE'],true);
                                    foreach($json as $mydata)
                                    {   
                                        if(isset($mydata['children'])){
                                            ?>
                                        <li class="parent dropdown">
                                        <a href="<?php echo '$mydata["menuType"].php?title='.$mydata["text"].''?>" class="dropdown-toggle disabled menua vcenter" data-toggle="dropdown" >
                                            <i class="<?php echo $mydata["icon"]?>" aria-hidden="true"></i><?php echo $mydata["text"]?>
                                            <i class="fa fa-angle-down ifx" aria-hidden="true"></i> </a>
                                            <ul class="sub-ul">
                                                <?php
                                                    foreach($mydata['children']  as $child)
                                                    { ?>
                                                    <li>
                                                        <a href="<?php echo $child['menuType'].'.php?title='.$mydata["text"].'' ?>" class=""> <?php echo $child["text"] ?></a>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                            </ul>
                                        </li>
                                        <?php
                                            }else { ?>
                                            <ul class="menu vcenter2"><li class="">
                                            <a href="<?php echo $mydata["href"] ?>" class=" vcenter"><i class="<?php echo $mydata["icon"]?>" aria-hidden="true"></i>
                                            <?php echo $mydata["text"] ?></a></li>
                                    <?php
                                        }
                                    }
                                ?>
                                <li class="visible-xs spc-menu">
                                    <a href="selling/order_entry.php" class="vcenter"><span webicon="wpf:in-transit" class="wh25"></span>&nbsp;&nbsp;Sipariş Takibi</a>
                                </li>
                                <li class="visible-xs spc-menu">
                                    <a href="register.php" class="vcenter"><span webicon="ion:android-person" class="wh25"></span>&nbsp;&nbsp;Üye Ol</a>
                                </li>
                                <li class="visible-xs spc-menu">
                                    <a href="contact.php" class="vcenter"><span webicon="wpf:assistant" class="wh25"></span>&nbsp;&nbsp;İletişim</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-xs hidden-sm">
                    <ul class="links pull-right">
                        <li class="user-login" id="desktop-user-login">
                            <a href="javascript:void(0);" class="open-div vcenter">
                                <span webicon="win10:gender-neutral-user" class="wh35" style="color:#fff;" title=""></span>
                                <span class="hidden-xs hidden-sm hidden-md linkspan">Hesabım</span>
                            </a>
                            <div class="user-login-div col-lg-12 col-md-12 col-sm-12 col-xs-6 col-m64-8 col-m48-8 col-m32-12 user-login-mobile-pos" style="">
                                        <div class="login-form-div">
                                        <form action="register.php" method="post" id="login-form">
                                                                                        <div class="form-group">
                                                <label>E-posta Adresi</label>
                                                <input type="email" name="username" class="form-control" placeholder="E-posta Adresi" />
                                            </div>
                                            <div class="form-group">
                                                <label>Şifre</label>
                                                <input type="password" name="password" class="form-control" placeholder="******" />
                                            </div>
                                            <input type="hidden" name="giris" value="1" />
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <button type="submit" class="btn login-btn button-purp">
                                                        Giriş Yap
                                                    </button>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><a href="javascript:void(0);" class="text-danger return-forget">
                                                        <strong>Şifremi Unuttum</strong></a> 
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><a href="uye-kayit.html" class="text-success">
                                                        <strong>Üye Ol</strong></a> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="forget-form-div">
                                        <form action="#" method="post" id="forget-form">
                                            <div class="form-group">
                                                <label>Sisteme Kayıtlı E-posta Adresi</label>
                                                <input type="email" name="usernamef" class="form-control" placeholder="Sisteme Kayıtlı E-posta Adresi" />
                                            </div>
                                            <input type="hidden" name="hatirlat" value="1" />
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
                                                <button type="submit" class="btn btn-primary forget-btn button-purp">
                                                    Devam Et
                                                </button>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 nopadding"><a href="javascript:void(0);" class="text-danger return-login">
                                                    <strong>Giriş Ekranı</strong></a> 
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 nopadding"><a href="uye-kayit.html" class="text-success">
                                                    <strong>Üye Ol</strong></a> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </li>
                        <li id="cart">
                            <div class="carttrigger">
                                <a href="javascript:void(0);" class="cart-link vcenter" >
                                    <span webicon="ion:bag" class="wh35" style="color:#fff;" title=""></span>
                                    <span class="hidden-xs hidden-sm hidden-md linkspan">Sepet</span>
                                </a>
                            </div>
                            <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12 col-m64-12 col-m48-12 col-m32-12">
                                <div class="contents">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <tr>
                                    <th width="10%">Ürün Resim</th>
                                    <th width="30%">Ürün Adı</th>
                                    <th width="10%">Adet</th>
                                    <th width="20%">Fiyat</th>
                                    <th width="15%">Toplam</th>
                                    <th width="5%">Sil</th>
                                    </tr>
                                    <?php
                                    if(!empty($_SESSION["shopping_cart"]))
                                    {
                                    $total = 0;
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                                    {
                                    ?>
                                        <tr>
                                        <?php   
                                                $sql_image    = "select * from image where ID = ".$values["item_image"]."";
                                                $result_image = mysqli_query($conn,$sql_image);
                                                $row_image    = mysqli_fetch_assoc($result_image);
                                        ?>
                                        <td><img src="<?php echo 'ttadmin/process/'.$row_image["URL"]; ?>"></td>
                                        <td><?php echo $values["item_name"]; ?></td>
                                        <td><?php echo $values["item_quantity"]; ?></td>
                                        <td>₺ <?php echo $values["item_price"]; ?></td>
                                        <td>₺ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                                        <td><a href="product.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Sil</span></a></td>
                                        </tr>
                                        <?php
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                    }
                                    ?>
                                    <tr>
                                    <td colspan="3" align="right">Total</td>
                                    <td align="right">₺ <?php echo number_format($total, 2); ?></td>
                                    <td></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>                                    
                                    </table>
                                        <div class="coupon-area">
                                            <form action="" method="post">
                                                <div class="input-group">
                                                    <input type="text" name="coupon" id="coupon" class="form-control" placeholder="İndirim Kodu" autocomplete="off">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info couponbutton" type="button"><span class="fa fa-gift"></span> Kullan</button>
                                                    </span>
                                                </div>
                                            </form>
                                            <div class="checkout">
                                            <a href="selling/checkout.php" role="button" class="btn btn-success">Satın Al</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</div>