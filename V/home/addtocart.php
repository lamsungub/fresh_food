<?php
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$qty = (isset($_GET['quantity'])) ? $_GET['quantity'] : '';
if (!empty($id) && !empty($qty)) {
	addToCart($id, $qty);
}

function addToCart($id,$qty)
{
 	$cookieName = 'cart';
	$cookieTime = time() + (86400 * 30);
 	$isValid = true;
 	// $isValid = isProductValid();
 	// Check product is valid (has $id in DB and quantity less than or equal $qty)
 	// If true then $isValid = true;
 	if ($isValid) {
 		$finalCart = '';
		if (isset($_COOKIE['cart'])) {
			$cart = $_COOKIE['cart'];
			$products = explode(';', $cart);
			$newProducts = [];

			foreach ($products as $index => $product) {
				$arr = explode('|', $product);
				$newProducts[$arr[0]] = $arr[1];
			}

			$hasProduct = array_key_exists($id, $newProducts);
			if ($hasProduct) {
				$newQty = $newProducts[$id] + $qty;
				$newProducts[$id] = $newQty;
			} else {
				$newProducts[$id] = $qty;
			}

			//$finalCart = '';
			foreach ($newProducts as $k => $p) {
				$prefix = (empty($finalCart)) ? '' : ';';
				$finalCart .= $prefix.$k.'|'.$p;
			}
		} else {
			$finalCart = $id.'|'.$qty;
		}

		setcookie($cookieName, $finalCart, $cookieTime, '/');
		header('Location: '.PATH.'?controller=home&action=cart');
 	}
}