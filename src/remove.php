<?php
session_start();
//session_unset();
//session_destroy();

if(!empty($_SESSION["cart"])) {
	foreach($_SESSION["cart"] as $k => $v) {
		if($_SESSION["id"] == $k){
		array_splice($_SESSION['cart'], $key ,1);
			 //unset($_SESSION["cart"][$k]);	
		}			
	if(empty($_SESSION["cart"]))
	{
		unset($_SESSION["cart"]);
		}
	}
	header('Location:products.php');
}
	
?>