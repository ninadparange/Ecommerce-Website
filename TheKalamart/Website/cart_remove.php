<?php
    require 'connection.php';
    session_start();
    $product_id=$_GET['product_id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from cart where user_id='$user_id' and  product_id='$product_id' ";
    $delete_query_result=mysqli_query($connection,$delete_query) or die(mysqli_error($connection));
    header('location: cart.php');
?>