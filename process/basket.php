<?php
    if(isset($_GET["TITLE"])) {
    echo "içeride";
    $product = array("productName"  => $_GET["TITLE"],
                     "productPrice" => $_GET["PRICE"],
                     "productPiece" => $_GET["PIECE"]);
    $_SESSION["productList"][$_GET["TITLE"]] = "";

    print_r($_SESSION["productList"]);
    }

?>