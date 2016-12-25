<?php

/*
|--------------------------------------------------------------------------
| Pretty debug handler.
|--------------------------------------------------------------------------
| 
| Whoops is a pretty debug handler.
| 
*/

$run     = new \Whoops\Run;
$handler = new \Whoops\Handler\PrettyPageHandler;
$JsonHandler = new \Whoops\Handler\JsonResponseHandler;
 
$run->pushHandler ( $JsonHandler );
$run->pushHandler ( $handler );
$run->register ( );