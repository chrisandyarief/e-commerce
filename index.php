<?php
session_start();
$_SESSION['username'] = 'chrisandyarief';
// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

//user interface routing
$f3->route('GET /',function($f3){
	$sql1 = 'SELECT `image`, `name`, `price` FROM `barang` LIMIT 10';
	$sql2 = 'SELECT `image`, `name`, `price` FROM `barang` LIMIT 10, 10';
	$sql3 = 'SELECT `image`, `name`, `price` FROM `barang` LIMIT 20, 10';
	$sql4 = 'SELECT `image`, `name`, `price` FROM `barang` LIMIT 30, 10';

	$res1 = $f3->get("DB")->exec($sql1);
	$res2 = $f3->get("DB")->exec($sql2);
	$res3 = $f3->get("DB")->exec($sql3);
	$res4 = $f3->get("DB")->exec($sql4);

	$f3->set('bestSeller', $res1);
	$f3->set('featured', $res2);
	$f3->set('sale', $res3);
	$f3->set('topRate', $res4);

	$sql = 'SELECT `cart` FROM user WHERE `username` ="'.$_SESSION['username'].'"';
	$res = $f3->get("DB")->exec($sql);
	foreach ($res as $value) {
		$res = explode(',',$value['cart']);
	}
	$barangCart = array();
	$hargaCart = array();
	foreach ($res as $value) {
		$barang=$f3->get("DB")->exec(
	        'SELECT `image`,`name`,`price` FROM `Barang` WHERE `id` ="'.$value.'"'
	    );
		$harga=$f3->get("DB")->exec(
	        'SELECT `price` FROM `Barang` WHERE `id` ="'.$value.'"'
	    );
		foreach ($harga as $value) {
			foreach ($value as $key => $values) {
				array_push($hargaCart,(int)$values);
			}
		}
		foreach ($barang as $value) {
			array_push($barangCart,$value);
		}
	}
	$harga = array_sum($hargaCart);
	$harga = "Rp ".number_format($harga,2,',','.');
	$f3->set('harga',$harga);
	$f3->set('datacart',$barangCart);
	echo \Template::instance()->render('pages/user/home.html');
});

$f3->route('GET /product',function($f3){
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
$f3->route('POST /e-commerce/checkout',function($f3){
	$dataCart = json_encode($_POST['data']);
	$cart =  explode(',',$dataCart);
	foreach ($cart as $key => $value) {
		$sql = 'SELECT `price` from barang where `name` ="'."$value".'"';
		$result=$f3->get("DB")->exec($sql);
		$harga;
		foreach ($result as $value) {
			$harga = $value['id'];
		}
		$sql2 = 'SELECT `id` from barang where `name` ="'."$value".'"';
		$result2=$f3->get("DB")->exec($sql2);
		$id_barang;
		foreach ($result as $value) {
			$id_barang = $value['id'];
		}
		$sqlFindId = 'SELECT `id` FROM user WHERE `username` ="'.$_SESSION['username'].'"';
		$temp = $f3->get("DB")->exec($sqlFindId);
		$tempId;
		foreach ($temp as $value) {
			$tempId = $value['id'];
		}
		$status=$_POST['status'];
		$sqlInsertData='INSERT INTO transaksi (`id_barang`, `total`, `amount`, `status`, `time`, `buyer_id`) VALUES ("'.$id_barang.'", "'.$harga.'", "1", "'.$status.'", "'.$date.'", "'.$tempId.'")';
		$finalRes=$f3->get("DB")->exec($sqlInsertData);
		echo $finalRes;
	}
});

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
