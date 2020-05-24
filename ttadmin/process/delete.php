<?php include("../connect/connection.php") ?>
<?php

if($_POST['editType'] === 'Product') {
    $sqldelete_product="delete from category_product where product_id = ".$product_id."";
    $result_product_category_delete=mysqli_query($conn,$sqldelete_product);

    $sqlupdate_product="update product set active = 0 where product_id = ".$product_id."";
    $result_product_category_delete=mysqli_query($conn,$sqlupdate_product);
}
if($_POST['editType'] === 'Category') {
    $sqldelete_category="delete from category_product where category_id = ".$category_id."";
    $result_product_category_delete=mysqli_query($conn,$sqldelete_category);

    $sqlupdate_category="update category set active = 0 where product_id = ".$category_id."";
    $result_product_category_delete=mysqli_query($conn,$sqlupdate_category);
}

if($_GET['menu_delete']=="ok") {
	$menu_id = $_GET['ID'];

	$sql_menu_delete = "update menu set active = 0 where id =".$menu_id."";
	$delete_menu = mysqli_query($conn,$sql_menu_delete);

	if mysql_affected_rows($conn) {
		header('Location:../menu.php?status=yes');
	}else{
        header('Location:../menu.php?status=no');
	}
}

?>