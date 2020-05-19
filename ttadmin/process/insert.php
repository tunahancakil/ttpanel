<?php include("../connect/connection.php");
//Page insert
if($_POST['insertType'] === 'Page') {
    $status = $_POST['STATUS'];
    $title = $_POST['TITLE'];
    $description = $_POST['DESCRIPTION'];
    $url = $_POST['URL'];
    $sql="select TITLE from page WHERE TITLE='$title' and ACTIVE=1";
    $result  =mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if ($rowcount>0)
    {
    echo "Bu isimde menü daha önce kayıt edilmiştir.";
    } 
    else
    {
    $sqlinsert="INSERT INTO page (TITLE,STATUS,URL,DESCRIPTION)
    VALUES ('$title',$status,'$url','$description')";
    echo $sqlinsert;
    $result=mysqli_query($conn,$sqlinsert);
    echo $result;
    if ($result==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
}
//Category insert
if($_POST['insertType'] === 'Category') {
    $mainCategory = $_POST['MAIN_CATEGORY'];
    $status = $_POST['STATUS'];
    $timeFormat = $_POST['TIME_FORMAT'];
    $notDelivery = $_POST['NOT_DELIVERY'];
    $title = $_POST['TITLE'];
    $description = $_POST['DESCRIPTION'];
    $pageText = $_POST['PAGE_TEXT'];
    $sql="select TITLE from category WHERE TITLE='$title' and ACTIVE=1";
    $result  =mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if ($rowcount>0)
    {
    echo "Bu isimde menü daha önce kayıt edilmiştir.";
    } 
    else
    {
    $sqlinsert="INSERT INTO category (MAIN_CATEGORY,STATUS,TIME_FORMAT,NOT_DELIVERY,TITLE,DESCRIPTION,PAGE_TEXT)
    VALUES ('$mainCategory',$status,'$timeFormat',$notDelivery,'$title','$description','$pageText')";
     
    $result=mysqli_query($conn,$sqlinsert);
     
    if ($result==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
}
//Product insert
if($_POST['insertType'] === 'Product') {
    include "upload.php";

    $mainCategory = $_POST['MAIN_CATEGORY'];
    $categoryList = $_POST['CATEGORY'];
    $productType = $_POST['PRODUCT_TYPE'];
    $status = $_POST['STATUS'];
    $tax = $_POST['TAX'];
    $includeTax = $_POST['INCLUDE_TAX'];
    $price = $_POST['PRICE'];
    $discountPrice = $_POST['DISCOUNT_PRICE'];
    $stock = $_POST['STOCK'];
    $minStock = $_POST['MIN_STOCK'];
    $stockCode = $_POST['STOCK_CODE'];
    $abroad = 0;
    if (isset($_POST['ABROAD'])) { 
        $abroad = 1;
    }
    $customerUpload = 0;
    if (isset($_POST['CUSTOMER_UPLOAD'])) { 
        $customerUpload = isset($_POST['CUSTOMER_UPLOAD']);
    }
    $deci = $_POST['DECI'];
    $freeCargo = 0;
    if (isset($_POST['FREE_CARGO'])) { 
        $freeCargo = isset($_POST['FREE_CARGO']);
    }
    $cargoNote = $_POST['CARGO_NOTE'];
    $title = $_POST['TITLE'];
    $url = $_POST['URL'];
    $description = $_POST['DESCRIPTION'];

    $sql="select TITLE from product WHERE TITLE='$title' and ACTIVE=1";
    $result  =mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if ($rowcount>0)
    {
    echo "Bu isimde menü daha önce kayıt edilmiştir.";
    } 
    else
    {
    $sqlinsert_product="INSERT INTO product (PRODUCT_TYPE,STATUS,TAX,INCLUDE_TAX,PRICE,DISCOUNT_PRICE,STOCK,MIN_STOCK,STOCK_CODE,ABROAD,CUSTOMER_UPLOAD,DECI,FREE_CARGO,CARGO_NOTE,TITLE,DESCRIPTION,URL)
    VALUES ($productType,$status,$tax,$includeTax,$price,$discountPrice,$stock,$minStock,'$stockCode',$abroad,$customerUpload,$deci,$freeCargo,'$cargoNote','$title','$description','$url')";
    echo $sqlinsert_product;
    $result_product=mysqli_query($conn,$sqlinsert_product);
    $select_id = "select ID from product where TITLE='$title'";
    $result_id = mysqli_query($conn,$select_id);
    $row=mysqli_fetch_row($result_id);

    foreach($categoryList as $category) {
    $sqlinsert_category="INSERT INTO product_category (PRODUCT_ID, CATEGORY_ID)
    VALUES ($row[0], $category)";
    $result_product_category=mysqli_query($conn,$sqlinsert_category);
    }
    
    $sqlinsert_category_main="INSERT INTO product_category ( PRODUCT_ID, CATEGORY_ID, IS_MAIN)
    VALUES ($row[0], $mainCategory, 1)";
    echo $sqlinsert_category_main;
    $result_product_category_main=mysqli_query($conn,$sqlinsert_category_main);

    if ($result_product==0 || $result_product_category==0 ||  $result_product_category_main==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
}

//Bank insert
if($_POST['insertType'] === 'Bank') {
    $bankName = $_POST['BANK_NAME'];
    $departmentNo = $_POST['DEPARTMENT_NO'];
    $accountName = $_POST['ACCOUNT_NAME'];
    $accountNo = $_POST['ACCOUNT_NO'];
    $iban = $_POST['IBAN'];
    $sql="select BANK_NAME from bank WHERE BANK_NAME='$bankName' and ACTIVE=1";
    $result  =mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if ($rowcount>0)
    {
    echo "Bu isimde banka daha önce kayıt edilmiştir.";
    } 
    else
    {
    $sqlinsert="INSERT INTO bank (BANK_NAME,DEPARTMENT_NO,ACCOUNT_NAME,ACCOUNT_NO,IBAN)
    VALUES ('$bankName',$departmentNo,'$accountName',$accountNo,$iban)";
    $result=mysqli_query($conn,$sqlinsert);
     
    if ($result==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
}


?>