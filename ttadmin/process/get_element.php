<?php 
	include("../connect/connection.php");
		if (isset($_POST['dropdownValue'])) {
			$value = $_POST['dropdownValue'];
			switch ($value) {
			  case "PAGE":
			  	$sql_get_element = "SELECT TITLE FROM page WHERE ACTIVE = 1";
			    break;
			  case "TEXT":
			    break;
			  case "CATEGORY":
			    break;
			  case "PRODUCT":
			    break;
			  case "MAIN":
			    break;
			  case "IMAGE":
			    break;
			  default:
			    echo "Your favorite color is neither red, blue, nor green!";
			}	
		}
            $result_get_element = mysqli_query($conn,$sql_get_element);		
			$json = mysqli_fetch_all ($result_get_element, MYSQLI_ASSOC);
			echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>