<?php include("../connect/connection.php") ?>
<?php
//Category update
if(isset($_POST['category_update'])) {
    $timeFormat = $_POST['TIME_FORMAT'];
    $notDelivery = $_POST['NOT_DELIVERY'];
    $title = $_POST['TITLE'];
    $description = $_POST['DESCRIPTION'];

    $sqlinsert='UPDATE category SET TIME_FORMAT = '.$timeFormat.', TITLE = '.$title.', DESCRIPTION = '.$description.' WHERE ID = '.$_POST['ID'].' ';
    $result=mysqli_query($conn,$sqlinsert);
     
    if ($result==0) {
    echo "Eklenemedi, kontrol ediniz";
    header('Location:../category.php?action=no');
    } else {
    echo "Başarıyla eklendi";
    header('Location:../category.php?action=yes');
    }
};

//Product update
if($_POST['editType'] === 'Product') {
    $title = $_POST['TITLE'];
    $category_list = $_POST['CATEGORY'];
    $main_category = $_POST['MAIN_CATEGORY'];
    $product_id = $_POST['ID'];

    $sqlinsert_product="UPDATE product
                        SET TITLE = ".$title.", 
                            PIECE = ".$piece.",
                            PRICE = ".$price.",
                            STOCK_CODE = ".$stock_code."
                        WHERE id = ".$product_id."";
    $result_product=mysqli_query($conn,$sqlinsert_product);

    $sqldelete_category="delete from category_product where product_id = ".$product_id."";
    $result_product_category_delete=mysqli_query($conn,$sqldelete_category);

    foreach($category_list as $category) {
    $sqlinsert_category="INSERT INTO category_product ( PRODUCT_ID, CATEGORY_ID) VALUES ($product_id, $category)";
    $result_product_category=mysqli_query($conn,$sqlinsert_category);
    }

    $sqlinsert_category_main="INSERT INTO category_product ( PRODUCT_ID, CATEGORY_ID, IS_MAIN) VALUES ($product_id, $category, 1)";
    $result_product_category_main=mysqli_query($conn,$sqlinsert_category_main);

    if ($result_product==0 || $result_product_category==0 || $result_product_category_main == 0) 
    echo "Eklenemedi, kontrol ediniz";
    else 
    echo "Başarıyla eklendi";
}
?>