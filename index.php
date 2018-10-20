<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$f3->route('GET /',function($f3){
	$result=$f3->get("DB")->exec(
        'SELECT * FROM `Barang`'
    );
	$f3->set('array_barang',$result);
	$view=new View;
    echo $view->render('pages/user/home.html');
});

$f3->route('GET /product',function($f3){
	$view=new View;
    echo $view->render('pages/user/product.html');
});
$f3->route('GET /cart',function($f3){
	$view=new View;
    echo $view->render('pages/user/cart.html');
});
$f3->route('GET /about',function($f3){
	$view=new View;
    echo $view->render('pages/user/about.html');
});
$f3->route('GET /contact',function($f3){
	$view=new View;
    echo $view->render('pages/user/contact.html');
});

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		echo View::instance()->render('layout.htm');
	}
);

//server
// $f3->set("DB",new DB\SQL(
//     'mysql:host=localhost;port=3306;dbname=id7413042_bukantokosebelah',
//     'id7413042_admin',
//     'admin123'
// ));

//local
$f3->set("DB",new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=e-commerce',
    'root',
    ''
));

$f3->run();
