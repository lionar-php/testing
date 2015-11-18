<?php

use Lionar\Kernel\Container,
	Lionar\Kernel\Dispatcher,
	Lionar\Kernel\Kernel,
	Lionar\Kernel\Request;

require __DIR__ . '/vendor/autoload.php';

$container = new Container;
$dispatcher = new Dispatcher( $container );

$routes = array(

	'/' => 'i want to test'
);


$kernel = new Kernel( $routes, $dispatcher );


when( 'i want to test', then( apply( a( function( )
{
	echo 'my test';
}))));


$response = $kernel->handle( Request::createFromGlobals( ) );
$response->send( );