<?php include "header.php"?>
<div class="mtop20">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 hidden-32 hidden-48 hidden-64 mbottom20">
				<a href="cicek-buketleri.html" >
					<img src="uploads/2019/10/998q-585.png" class="img-responsive center-block" />
				</a>
			</div>
			<div class="col-sm-3 hidden-32 hidden-48 hidden-64 mbottom20">
				<a href="gonderime-gore.html" >
					<img src="uploads/2019/10/ban3-439.png" class="img-responsive center-block" />
				</a>
			</div>
			<div class="col-sm-3 hidden-32 hidden-48 hidden-64 mbottom20">
				<a href="dogum-gunu.html" >
					<img src="uploads/2019/10/ban1-884.png" class="img-responsive center-block" />
				</a>
			</div>
			<div class="col-sm-3 hidden-32 hidden-48 hidden-64 mbottom20">
				<a href="tasarim-cicekler.html" >
					<img src="uploads/2019/10/ban2-250.png" class="img-responsive center-block" />
				</a>
			</div>
            <?php 
                $sql = "select * from product where ACTIVE = 1";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result))
                {
                    $sql_category = "select TITLE from category where ID in (select CATEGORY_ID from category_product where PRODUCT_ID = ".$row['ID'].") and ACTIVE = 1";
                    $result_category = mysqli_query($conn,$sql_category);      
                ?>
                    <div class="col-xs-2 col-m64-6 col-m48-12 col-m32-12">
                        <div class="product-block">
                            <div class="col-m32-4 p0">
                                <div class="image ">
                                    <div class="product-label-special hidden-32 hidden-48 wow rubberBand"><span>%20</span></div>
                                    <div class="image_container vcenter">
                                        <a href="<?php echo 'product.php?id='.$row['ID'].''?>" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-q99-483.jpg" title="<?php echo  $row['TITLE'] ?>" alt="<?php echo $row['TITLE']?>"  class="img-responsive center-block" /></a>
                                    </div>                              
                                    <a class="pav-colorboxx hidden-xs" href="<?php echo 'product.php?id='.$row['ID'].''?>">İNCELE</a>
                                    <div class="img-overlay"></div>
                                </div>
                            </div>
                            <div class="col-m32-8 p0">
                                <p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
                                <a href="<?php echo 'product.php?id='.$row['ID'].''?>" class="vcenter name vcenterparent"><?php echo $row['TITLE']?> </a>
                                <div class="price text-center">
                                <?php if (!empty($row['DISCOUNT_PRICE'])) { ?>                                                                                                           
                                    <div class="price-old"><span><?php echo substr($row['PRICE'],0,strpos($row['PRICE'], ".")) ?></span> 
                                    <span><small><?php echo substr($row['PRICE'],strpos($row['PRICE'], ".")) ?> TL<small></small><small>+ KDV</small></small></span></div> 
                                    <div class="price-new"><span><?php echo substr($row['DISCOUNT_PRICE'],0,strpos($row['DISCOUNT_PRICE'], ".")) ?></span> <span><small>,<?php substr($row['DISCOUNT_PRICE'],strpos($row['DISCOUNT_PRICE'], ".")) ?> TL<small></small><small>+ KDV</small></small></span></div>
                                <?php } else { ?>
                                    <div class="price-new"><span><?php echo substr($row['DISCOUNT_PRICE'],0,strpos($row['DISCOUNT_PRICE'], ".")) ?></span> <span><small>,<?php substr($row['DISCOUNT_PRICE'],strpos($row['DISCOUNT_PRICE'], ".")) ?> TL<small></small><small>+ KDV</small></small></span></div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
			<div class="clearfix"></div>
			<div class="col-sm-12 main-column no-padding">
				<div class="product-related box ">
                    <?php 
                        $sql_main_category = "select * from category where ACTIVE = 1 and MAIN_PAGE = 1 order by ROW_ORDER";
                        $result_main_category = mysqli_query($conn,$sql_main_category);
                        while($row_main_category =mysqli_fetch_array($result_main_category))
                        {
                        $sql_main_category_product_count = "select count(*) as total from product where ID in (select PRODUCT_ID from category_product where CATEGORY_ID = ".$row_main_category['ID'].") and ACTIVE = 1";
                        $result_main_category_product_count = mysqli_query($conn,$sql_main_category_product_count);
                        $data=mysqli_fetch_assoc($result_main_category_product_count);
                        $sql_main_category_product = "select * from product where ID in (select PRODUCT_ID from category_product where CATEGORY_ID = ".$row_main_category['ID'].") and ACTIVE = 1";
                        $result_main_category_product = mysqli_query($conn,$sql_main_category_product);      
                        ?>
					<div class="linetext"><?php echo $row_main_category['TITLE'] ?></div>
                    <div class="owl-carousel owl-theme owl-carousel-main owl-carousel-customnav prod-detail-last-view" data-itm="6">
                    <?php 
                        while($row_main_category_product =mysqli_fetch_array($result_main_category_product))
                        { 
                    ?>
                        <div class="item col-xs-12 no-padding">
							<div class="product-block"> 
								<div class="col-m32-4 p0">
									<div class="image ">
										<div class="image_container vcenter">
											<a href="4-dal-beyaz-orkide.html" class="img  front vcenter"><img src="themes/magnoliav2/image/loading.gif" data-echo="https://www.cicekfilem.com/uploads/2019/10/1-thumb-q95-148.png" title="<?php echo $row_main_category_product['TITLE'] ?>" alt="<?php echo $row_main_category_product['TITLE'] ?>" class="img-responsive center-block" /></a>
										</div>                              
									</div>
								</div>
								<div class="col-m32-8 p0">
									<p class="text-center sameday vcenter"><span webicon="stroke7:clock" class="wh18"></span> Aynı Gün Teslimat</p>
									<a href="4-dal-beyaz-orkide.html" class="vcenter name vcenterparent"><?php echo $row_main_category_product['TITLE'] ?></a>
									<div class="group-item"> 
										<div class="price-cart">
                                        <div class="price text-center">
                                            <?php if (empty($row_main_category_product['DISCOUNT_PRICE'])) { echo '
                                                <div class="price-new"><span>'.substr($row_main_category_product['PRICE'],0,strpos($row_main_category_product['PRICE'], ".")).'</span> 
                                                <span><small>,'.substr($row_main_category_product['PRICE'],strpos($row_main_category_product['PRICE'], ".")).' TL<small></small>
                                                <small>+ KDV</small></small></span></div>';
                                            }else {
                                                echo '<div class="price-old"><span>'.substr($row_main_category_product['PRICE'],0,strpos($row_main_category_product['PRICE'], ".")).' </span> <span><small>,'.substr($row_main_category_product['PRICE'],strpos($row_main_category_product['PRICE'], ".")).' TL<small></small><small>+ KDV</small></small></span></div> 
                                                <div class="price-new"><span>'.substr($row_main_category_product['DISCOUNT_PRICE'],0,strpos($row_main_category_product['DISCOUNT_PRICE'], ".")).'</span> <span><small>,'.substr($row_main_category_product['DISCOUNT_PRICE'],strpos($row_main_category_product['DISCOUNT_PRICE'], ".")).' TL<small></small><small>+ KDV</small></small></span></div>';
                                            } ?>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    <?php } ?>
					</div>
                <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php"?>