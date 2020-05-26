<!DOCTYPE html>
<?php session_start(); ?>
<html lang="tr">
        <head>
        <style type="text/css">
            @charset "UTF-8";
            webicon,
            [webicon],
            [data-webicon],
            .webicon,
            .webicon {
                display: inline-block;
            }

            .svg-webicon svg {
                fill: currentColor;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Çiçekçi</title>
        <meta name="google-site-verification" content="Gh2f7L-_GMyzG6i5JF43wlKyzOFwiG">
        <meta name="robots" content="index, follow">
        <link rel="shortcut icon" href="../uploads/favicon.png" type="image/x-icon">
        <link href="../themes/magnoliav2/css/bootstrap-min.css" rel="stylesheet">
        <link href="../themes/magnoliav2/css/stylesheet.css" rel="stylesheet">
        <link href="../themes/magnoliav2/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet">
        <link href="../themes/magnoliav2/css/animate.css" rel="stylesheet">
        <link href="../themes/magnoliav2/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="../themes/magnoliav2/css/font-awesome.min.css" rel="stylesheet">
        <link href="../themes/magnoliav2/css/jquery.fancybox.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Oswald|Work+Sans|Quicksand|Livvic|Lexend+Deca|Montserrat|Dancing+Script" rel="stylesheet" type="text/css">
        <script src="https://connect.facebook.net/tr_TR/sdk.js?hash=06ca06c1aecef004e56f814510177010&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/tr_TR/sdk.js"></script><script type="text/javascript" src="../themes/magnoliav2/js/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/jquery/ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/common.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/jquery/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/sidebarEffects.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/ctDrillDown.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/wow.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/jquery.cookie.min.js"></script>
        <script type="text/javascript" src="../themes/magnoliav2/js/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="//cdn.rawgit.com/icons8/bower-webicon/v0.10.7/jquery-webicon.min.js"></script>

        <script>
            var base = "#";
            var src = "search";
            var area = "bolge";

            function openpp() {
                setTimeout(function () {
                    $.fancybox.open('<a href="../adherent" style="display: inline-block; margin-top:100px;"><img src="../themes/magnoliav2/image/bn1.jpg" class="img-responsive center-block" /></a>', {
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
        <script type="text/javascript" src="../themes/magnoliav2/js/js.js"></script>
        </head>
        <body>