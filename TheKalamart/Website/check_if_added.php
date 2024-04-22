<?php
    
    function check_if_added_to_cart($product_id){
        //session_start();    
        require 'connection.php';
        $user_id=$_SESSION['id'];
        $product_check_query="select * from cart where product_id='$product_id' and user_id='$user_id'";
        $product_check_result=mysqli_query($connection,$product_check_query) or die(mysqli_error($connection));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>