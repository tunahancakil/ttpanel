<?php include("../connect/connection.php") ?>
<?php

if($_POST['editType'] === 'Product') {
    $sqldelete_product="delete from product_category where product_id = ".$product_id."";
    $result_product_category_delete=mysqli_query($conn,$sqldelete_product);

    $sqlupdate_product="update product set active = 0 where product_id = ".$product_id."";
    $result_product_category_delete=mysqli_query($conn,$sqlupdate_product);
}
if($_POST['editType'] === 'Category') {
    $sqldelete_category="delete from product_category where category_id = ".$category_id."";
    $result_product_category_delete=mysqli_query($conn,$sqldelete_category);

    $sqlupdate_category="update category set active = 0 where product_id = ".$category_id."";
    $result_product_category_delete=mysqli_query($conn,$sqlupdate_category);
}
?>