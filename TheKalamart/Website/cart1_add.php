<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $product_id=$_GET['product_id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into cart(product_id,user_id) values ('$product_id','$user_id')";
    $add_to_cart_result=mysqli_query($connection,$add_to_cart_query) or die(mysqli_error($connection));
    header('location: handmade.php');
    
?>