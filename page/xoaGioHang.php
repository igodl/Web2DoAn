<?php
if ( isset( $_GET[ 'id' ] ) ) {

  session_start();

  foreach($_SESSION['cart'] as $cart_item => $value)
  {
	  if($value['id_sanpham'] == $_GET['id'])
		  unset($_SESSION['cart'][$cart_item]);
  }
}
header( 'Location:../checkout-step-1.php' );
?>