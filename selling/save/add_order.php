<?php
include("../../ttadmin/connect/connection.php");
session_start();

if (isset($_POST['checkout'])) {
    if(isset($_SESSION["shopping_cart"]))
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {       
                $referenceNo   = strtoupper(uniqid());
                $sql_orders    = 'INSERT INTO orders (REFERENCE_NO,DELIVERY_CLOCK,DELIVERY_CITY,DELIVERY_DISTRICT,IS_DELIVERY,TOTAL_AMOUNT) VALUES (
                    "'.$referenceNo.'","'.$values["item_delivery_clock"].'","'.$values["item_delivery_city"].'","'.$values["item_delivery_district"].'",
                    "'.$values["item_is_delivery"].'","'.($values["item_price"]*$values["item_quantity"]).'"
                )';
                $result_orders = mysqli_query($conn,$sql_orders);
                if ($result_orders==0){
                echo "Eklenemedi, kontrol ediniz";
                }else{
                echo "Başarıyla eklendi";
                header('Location:../user_login.php');
                };
        }
    }
}
if (isset($_POST['checkout'])) {
    if(isset($_SESSION["shopping_cart"]))
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {       
                $referenceNo   = strtoupper(uniqid());
                $sql_orders    = 'INSERT INTO orders (REFERENCE_NO,DELIVERY_CLOCK,DELIVERY_CITY,DELIVERY_DISTRICT,IS_DELIVERY,TOTAL_AMOUNT) VALUES (
                    "'.$referenceNo.'","'.$values["item_delivery_clock"].'","'.$values["item_delivery_city"].'","'.$values["item_delivery_district"].'",
                    "'.$values["item_is_delivery"].'","'.($values["item_price"]*$values["item_quantity"]).'"
                )';
                $result_orders = mysqli_query($conn,$sql_orders);
                if ($result_orders==0){
                echo "Eklenemedi, kontrol ediniz";
                }else{
                echo "Başarıyla eklendi";
                header('Location:../user_login.php');
                };
        }
    }
}
?>