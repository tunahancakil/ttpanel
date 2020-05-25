<?php include ("header.php");?>
<?php 
$connect = mysqli_connect("localhost", "admin", "admin", "ttyazilim");
if(count($_SESSION["shopping_cart"]) > 0)
{       
    echo "<script>
    $('#cart ').addClass('highlight active');
    $('html, body').animate({scrollTop: 0}, 800);</script>"; 
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
        'item_id'       =>  $_GET["id"],
        'item_name'     =>  $_POST["hidden_name"],
        'item_price'        =>  $_POST["hidden_price"],
        'item_quantity'     =>  $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][$count] = $item_array;
        echo '<script>window.location="productTest.php"</script>';
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
 
    }
    else
    {
        $item_array = array(
        'item_id'           =>  $_GET["id"],
        'item_name'         =>  $_POST["hidden_name"],
        'item_price'        =>  $_POST["hidden_price"],
        'item_quantity'     =>  $_POST["quantity"]
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
        echo '<script>window.location="productTest.php"</script>';
        }
        }
    }
}
 
?>

<div class="container">
        <br />
        <br />
        <br />
        <h3 align="center">Shoping Cart With PHP And MySql | Source Code By <a href="https://webdevtrick.com">Webdevtrick.com</a></h3><br />
        <br /><br />
        <?php
        $query = "SELECT * FROM product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <div class="col-md-4">
        <form method="post" action="productTest.php?action=add&id=<?php echo $row["ID"]; ?>">
        <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
        <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
 
        <h4 class="text-info"><?php echo $row["TITLE"]; ?></h4>
 
        <h4 class="text-danger">$ <?php echo $row["PRICE"]; ?></h4>
 
        <input type="text" name="quantity" value="1" class="form-control" />
 
        <input type="hidden" name="hidden_name" value="<?php echo $row["TITLE"]; ?>" />
 
        <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>" />
 
        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
 
        </div>
        </form>
        </div>
        <?php
        }
        }
        ?>
        <div style="clear:both"></div>
        <br/>
        </div>
    </div>
    <br/>



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

<script type="text/javascript">
    function cartAction(action,product_code) {
    var queryString = "";
        if(action != "") {
            switch(action) {
                case "add":
                    queryString = 'action='+action+'&code='+ product_code+'&quantity='+$("#qty_"+product_code).val();
                break;
                case "remove":
                    queryString = 'action='+action+'&code='+ product_code;
                break;
                case "empty":
                    queryString = 'action='+action;
                break;
            }    
        }
        jQuery.ajax({
        url: "card.php",
        data:queryString,
        type: "POST",
        success:function(data){
            $("#cart-item").html(data);
            if(action != "") {
                switch(action) {
                    case "add":
                        $("#add_"+product_code).hide();
                        $("#added_"+product_code).show();
                    break;
                    case "remove":
                        $("#add_"+product_code).show();
                        $("#added_"+product_code).hide();
                    break;
                    case "empty":
                        $(".btnAddAction").show();
                        $(".btnAdded").hide();
                    break;
                }    
            }
        },
        error:function (){}
        }); 
    }
</script>
<?php include "footer.php"?>