<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

// $f3->route('GET /',
// 	function($f3) {
// 		$classes=array(
// 			'Base'=>
// 				array(
// 					'hash',
// 					'json',
// 					'session',
// 					'mbstring'
// 				),
// 			'Cache'=>
// 				array(
// 					'apc',
// 					'apcu',
// 					'memcache',
// 					'memcached',
// 					'redis',
// 					'wincache',
// 					'xcache'
// 				),
// 			'DB\SQL'=>
// 				array(
// 					'pdo',
// 					'pdo_dblib',
// 					'pdo_mssql',
// 					'pdo_mysql',
// 					'pdo_odbc',
// 					'pdo_pgsql',
// 					'pdo_sqlite',
// 					'pdo_sqlsrv'
// 				),
// 			'DB\Jig'=>
// 				array('json'),
// 			'DB\Mongo'=>
// 				array(
// 					'json',
// 					'mongo'
// 				),
// 			'Auth'=>
// 				array('ldap','pdo'),
// 			'Bcrypt'=>
// 				array(
// 					'mcrypt',
// 					'openssl'
// 				),
// 			'Image'=>
// 				array('gd'),
// 			'Lexicon'=>
// 				array('iconv'),
// 			'SMTP'=>
// 				array('openssl'),
// 			'Web'=>
// 				array('curl','openssl','simplexml'),
// 			'Web\Geo'=>
// 				array('geoip','json'),
// 			'Web\OpenID'=>
// 				array('json','simplexml'),
// 			'Web\Pingback'=>
// 				array('dom','xmlrpc')
// 		);
// 		$f3->set('classes',$classes);
// 		$f3->set('content','welcome.htm');
// 		echo View::instance()->render('layout.htm');
// 	}
// );

$f3->route('GET /',function($f3){
	// $f3->set('content','home-02.html');
	$result=$f3->get("DB")->exec(
        'SELECT * FROM `Barang`'
    );
	var_dump($result);
	$view=new View;
    echo $view->render('home.html');
});

$f3->route('GET /product',function($f3){
	// $f3->set('content','home-02.html');
	$view=new View;
    echo $view->render('product.html');
});
$f3->route('GET /cart',function($f3){
	// $f3->set('content','home-02.html');
	$view=new View;
    echo $view->render('cart.html');
});
$f3->route('GET /about',function($f3){
	// $f3->set('content','home-02.html');
	$view=new View;
    echo $view->render('about.html');
});
$f3->route('GET /contact',function($f3){
	// $f3->set('content','home-02.html');
	$view=new View;
    echo $view->render('contact.html');
});

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		echo View::instance()->render('layout.htm');
	}
);

$f3->set("DB",new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=id7413042_bukantokosebelah',
    'id7413042_admin',
    'admin123'
));

$f3->run();
