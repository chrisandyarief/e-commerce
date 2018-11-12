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
	        'SELECT `image`,`name`,`price` FROM `barang` WHERE `id` ="'.$value.'"'
	    );
		$harga=$f3->get("DB")->exec(
	        'SELECT `price` FROM `barang` WHERE `id` ="'.$value.'"'
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
	$harga = "IDR ".number_format($harga,2,',','.');
	$f3->set('harga',$harga);
	$f3->set('amount',count($barangCart));
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
//ajax routing
function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$f3->route('POST /checkout',function($f3){
	$dataCart = json_encode($_POST['data']);
	$cart =  multiexplode(array(',','[',']','"'),$dataCart);
	foreach ($cart as $value) {
		if ($value == "") {
		}
		else{
			$sql = 'SELECT `price` from barang where `name` ="'."$value".'"';
			$result=$f3->get("DB")->exec($sql);
			$harga;
			foreach ($result as $price) {
				$harga = $price['price'];
			}
			$sql2 = 'SELECT `id` from barang where `name` ="'."$value".'"';
			$result2=$f3->get("DB")->exec($sql2);
			$id_barang;
			foreach ($result2 as $idBarang) {
				$id_barang = $idBarang['id'];
			}
			$sqlFindId = 'SELECT `id` FROM user WHERE `username` ="'.$_SESSION['username'].'"';
			$temp = $f3->get("DB")->exec($sqlFindId);
			$tempId;
			foreach ($temp as $idUser) {
				$tempId = $idUser['id'];
			}
			if ($_POST['status'] == "pending") {
				$status = 0;
				$sqlInsertData='INSERT INTO transaksi (`id_barang`, `total`, `amount`, `status`, `time`, `buyer_id`) VALUES ("'.$id_barang.'", "'.$harga.'", "1", "'.$status.'",NOW(), "'.$tempId.'")';
				$finalRes=$f3->get("DB")->exec($sqlInsertData);
			}
			else{
				$status = 1;
				$sqlInsertData='INSERT INTO transaksi (`id_barang`, `total`, `amount`, `status`, `time`, `buyer_id`) VALUES ("'.$id_barang.'", "'.$harga.'", "1", "'.$status.'",NOW(), "'.$tempId.'")';
				$finalRes=$f3->get("DB")->exec($sqlInsertData);
			}
			$sqlDeleteCart = 'UPDATE `user` SET `cart`=NULL WHERE `username`="'.$_SESSION['username'].'"';
			$f3->get("DB")->exec($sqlDeleteCart);
		}
	}
	echo "success";
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
//jtable listRouting
$f3->route('POST /listTransaction',function($f3){
	$sql = 'SELECT `id`,`id_barang`,`total`,`amount`,`status`,`time`,`buyer_id` FROM transaksi';
	$result = $f3->get("DB")->exec($sql);
	//Return result to jTable
	$jTableResult = array();
	$jTableResult['Result'] = "OK";
	$jTableResult['Records'] = $result;
	print json_encode($jTableResult);
});

$f3->route('POST /listUser',function($f3){
	$sql = 'SELECT `id`,`username`,`email`,`phonenumber`,`address`,`cart` FROM user';
	$result = $f3->get("DB")->exec($sql);
	//Return result to jTable
	$jTableResult = array();
	$jTableResult['Result'] = "OK";
	$jTableResult['Records'] = $result;
	print json_encode($jTableResult);
});

$f3->route('POST /updateTransaction',function($f3){
	$sql = 'UPDATE `transaksi` SET `id_barang`='.$_POST['id_barang'].',`total`='.$_POST['total'].',`amount`='.$_POST['amount'].',`status`='.$_POST['status'].',`time`='.$_POST['time'].',`buyer_id`='.$_POST['buyer_id'].' WHERE `id`='.$_POST['id'].'';
    $result = $f3->get("DB")->exec($sql);

    //Return result to jTable
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    print json_encode($jTableResult);
});

$f3->route('GET /adminHome',function($f3){
	echo \Template::instance()->render('pages/admin/adminhome.html');
});

$f3->route('GET /adminUser',function($f3){
	echo \Template::instance()->render('pages/admin/user.html');
});
$f3->route('GET /adminPayment',function($f3){
	echo \Template::instance()->render('pages/admin/payment.html');
});
$f3->route('GET /adminUser',function($f3){
	echo \Template::instance()->render('pages/admin/user.html');
});

// server
$f3->set("DB",new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=id7413042_bukantokosebelah',
    'id7413042_admin',
    'admin123'
));

// //local
// $f3->set("DB",new DB\SQL(
//     'mysql:host=localhost;port=3306;dbname=e-commerce',
//     'root',
//     ''
// ));

$f3->run();
