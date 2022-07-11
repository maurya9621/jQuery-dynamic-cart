<?php
//session_start();
//  session_unset();
//  session_destroy();

$products =  array(
    array("id"=>"101","class"=>"product","image" => "<img src='images/football.png'>", "name" => "<b>Product-101</b>", "price" => "150.00", "add-to-cart" => "<a class='add-to-cart' href='#'>Add To Cart</a>"),
    array("id"=>"102","class"=>"product","image" => "<img src='images/tennis.png'>", "name" => "<b>Product-102</b>", "price" => "120.00", "add-to-cart" => "<a class='add-to-cart' href='#'>Add To Cart</a>"),
    array("id"=>"103","class"=>"product","image" => "<img src='images/basketball.png'>", "name" => "<b>Product-103</b>", "price" => "90.00", "add-to-cart" => "<a class='add-to-cart' href='#'>Add To Cart</a>"),
    array("id"=>"104","class"=>"product","image" => "<img src='images/table-tennis.png'>", "name" => "<b>Product-104</b>", "price" => "110.00", "add-to-cart" => "<a class='add-to-cart' href='#'>Add To Cart</a>"),
    array("id"=>"105","class"=>"product","image" => "<img src='images/soccer.png'>", "name" => "<b>Product-105</b>", "price" => "80.00", "add-to-cart" => "<a class='add-to-cart' href='#' >Add To Cart</a>")
);

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = $products;
}

?>
 

 