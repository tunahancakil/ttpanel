<?php
  session_start(); 
    require("../ttadmin/connect/connection.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
  
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
      
  
    <title>Shopping Cart</title> 
  
  
</head> 
  
<body> 
      
    <div id="container"> 
  
        <div id="main"> 
              
            <?php require($_page.".php"); ?> 
            <h1>Product List</h1> 
    <table> 
        <tr> 
            <th>Name</th> 
            <th>Description</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> 
        <tr> 
            <td>Product 1</td> 
            <td>Some random description</td> 
            <td>15 $</th> 
            <td><a href="#">Add to cart</a></td> 
        </tr> 
         <tr> 
            <td>Product 2</td> 
            <td>Some random description</td> 
            <td>25 $</th> 
            <td><a href="#">Add to cart</a></td> 
        </tr> 
    </table>
  
        </div><!--end of main--> 
          
        <div id="sidebar"> 
            <h1>Cart</h1> 
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM products WHERE id_product IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
        $query=mysql_query($sql); 
        while($row=mysql_fetch_array($query)){ 
              
        ?> 
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p> 
        <?php 
              
        } 
    ?> 
        <hr /> 
        <a href="index.php?page=cart">Go to cart</a> 
    <?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } ?>
              
        </div><!--end of sidebar--> 
  
    </div><!--end container--> 
  
</body> 
</html>