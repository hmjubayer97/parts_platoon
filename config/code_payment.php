<?php
    require ('stripe-php-master/init.php');
   $publishKey="pk_test_51MG5SgL8xGCeuD8LYDvWfcD2EezIPDPmk5LywKCm2LCVbJM3Ra1tLmu8e8tRxfe0MPVBAL1tHMlmItLDILbppIjO00IrMkKlQ0";
   $secretKey="sk_test_51MG5SgL8xGCeuD8LrGjebHy7Vh2yIEnHSCQBbeTWAUN3fAxMltJhHvqCHSbO32xfkSzVDMaBOnVyu1Wm7lHWpBJf00qCUMKOvh";
   \Stripe\Stripe::setApiKey($secretKey);
?>