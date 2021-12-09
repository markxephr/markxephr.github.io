<?php
define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/tutorial/');
define('CART_COOKIE','SBwi72UCklwiqzz2');
define('CART_COOKIE_EXPIRE',time() + (86400 * 30));
define('TAXRATE', 0.087); //sales tax rate. Set to 0 if you aren't charging TAX

define('CURRENCY', 'usd');
define('CHECKOUTMODE', 'TEST'); //Change TEST to LIVE when you are ready to sell
 if(CHECKOUTMODE == 'TEST'){
   define('STRIPE_PRIVATE','insertyourownstripekey');
   define('STRIPE_PUBLIC','insertyourownstripekey');
 }

 if(CHECKOUTMODE == 'LIVE'){
   define('STRIPE_PRIVATE','insertyourownstripekey');
   define('STRIPE_PUBLIC','insertyourownstripekey');
 }
?>
