<?php
	echo "PHP PSR-0 & PSR-4. Autoloading Standard";

	// function __autoload($class)
	// {
	    // $filename = 'classes/' . $class . '.php';
	    // if (file_exists($filename)) {
	    //  include_once($filename);
	    // }
	// }

	// $web = new WebController();

	// echo $web->get();

	spl_autoload_register(function($class){
		$filename = 'controller/' . $class . '.php';
	    if (file_exists($filename)) {
	     include $filename;
	    }
		

	});

	spl_autoload_register(function($class){
		$filename = 'services/' . $class . '.php';
		if (file_exists($filename)) {
	     include $filename;
	    }

	});

	$web = new WebController();
	$app = new AppService();
	echo $web->get();
	echo "\n";
	echo $app->get();


 ?>