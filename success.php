<?php
require 'config.php';
session_start();
if(!empty($_POST)){
    $order_id = $_SESSION['order_id'];

    $razorpay_order_id = $_post['razorpay_signature'];
    $razorpay_signature = $_post['razorpay_signature'];
    $razorpay_payment_id = $_post['razorpay_payment_id'];

    $generated_signature = hash_hmac('sha256',$order_id ."|" . $razorpay_payment_id, API_SECRET);
    
    if($generated_signature == $razorpay_signature){
        echo 'payment successful';
    }else{
        echo 'Invalid payment';
    }

}

?>