<?php
session_start();
// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//user interface routing
$f3->route('GET /',function($f3){
	$result=$f3->get("DB")->exec(
        'SELECT `image` FROM `Barang`'
    );
	$array = array();
	foreach ($result as $value) {
		foreach ($value as $values) {
			array_push($array,$values);
		}
	}
	$f3->set('gambar',$array);
	echo \Template::instance()->render('pages/user/home.html');
});

$f3->route('GET /product',function($f3){
	$_SESSION['username'] = "chrisandyarief";
	var_dump($_SESSION['username']);
	$result=$f3->get("DB")->exec(
        'SELECT `name`,`image`,`description`,`price` FROM `barang`'
    );
	$array = array();
	foreach ($result as $value) {
		array_push($array,$value);
	}
	$f3->set('dataproduct',$array);
	echo \Template::instance()->render('pages/user/product.html');
});
// $f3->route('GET /cart',function($f3){
// 	echo \Template::instance()->render('pages/user/cart.html');
// });
$f3->route('GET /about',function($f3){
	echo \Template::instance()->render('pages/user/about.html');
});
$f3->route('GET /contact',function($f3){
	echo \Template::instance()->render('pages/user/contact.html');
});
//ajax routing
$f3->route('POST /addToCart',function($f3){
	if (isset($_SESSION['username'])) {
		$sqlFindId = 'SELECT `id` FROM user WHERE `username` ="'.$_SESSION['username'].'"';
		$temp = $f3->get("DB")->exec($sqlFindId);
		$productName  =  $_POST;
		$tempId;
		foreach ($temp as $value) {
			$tempId = $value['id'];
		}
		foreach ($productName as $key => $value) {
			$productName = str_replace(" ","",$key);
			$productName = str_replace("_"," ",$key);
			$productName = ltrim($productName);
			$productName = rtrim($productName);
		}
		$sqlGetCart = 'SELECT `cart` FROM user WHERE `username` ="'.$_SESSION['username'].'"';
		$tempCart = $f3->get("DB")->exec($sqlGetCart);
		$tmpCart;
		foreach ($tempCart as $value) {
			$tmpCart = $value['cart'];
		}
		var_dump($tmpCart);
		$sql = 'SELECT `id` from barang where `name` ="'."$productName".'"';
		$result=$f3->get("DB")->exec($sql);
		$tmp;
		foreach ($result as $value) {
			$tmp = $value['id'];
		}
		if ($tmpCart == "") {
			$tmpCart = $tmp;
		}
		else{
			$tmpCart = $tmpCart.", ".$tmp;
		}
		$sqlAdd = 'UPDATE user SET cart="'.$tmpCart.'" WHERE `id` = "'.$tempId.'"';
		$f3->get("DB")->exec($sqlAdd);
	}
	else{
		echo "No User Active";
	}
});

//admin routing
$f3->route('GET /adminHome',function($f3){
	echo \Template::instance()->render('pages/admin/adminhome.html');
});

$f3->route('GET /adminUser',function($f3){
	echo \Template::instance()->render('pages/admin/user.html');
});
$f3->route('GET /adminPayment',function($f3){
	echo \Template::instance()->render('pages/admin/payment.html');
});
$f3->route('GET /adminOrder',function($f3){
	echo \Template::instance()->render('pages/admin/order.html');
});

// server
// $f3->set("DB",new DB\SQL(
//     'mysql:host=localhost;port=3306;dbname=id7413042_bukantokosebelah',
//     'id7413042_admin',
//     'admin123'
// ));

// //local
$f3->set("DB",new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=e-commerce',
    'root',
    ''
));

$f3->run();
