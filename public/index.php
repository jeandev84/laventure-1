<?php

/*
|----------------------------------------------------------------------
|               Laventure
|
|   Author      :   Jean-Claude
|   Email       :   jeanyao@ymail.com
|   Occupation  :   Backend PHP Developer
|   GITLAB      :   https://github.com/jeandev84/laventure
|
|----------------------------------------------------------------------
*/


/*
|----------------------------------------------------------------------
|   Autoloader classes and dependencies of application
|----------------------------------------------------------------------
*/

require_once __DIR__.'/../vendor/autoload.php';



/*
|-------------------------------------------------------
|    Require bootstrap of Application
|-------------------------------------------------------
*/

$app = require_once __DIR__.'/../bootstrap/app.php';




/*
|-------------------------------------------------------
|    Check instance of Kernel
|-------------------------------------------------------
*/


$kernel = $app->get(\Laventure\Contract\Http\Kernel::class);


/*
|-------------------------------------------------------
|    Get Response
|-------------------------------------------------------
*/


$response = $kernel->handle(
    $request = \Laventure\Component\Http\Request\Request::createFromGlobals()
);



/*
|-------------------------------------------------------
|    Send all headers to navigator
|-------------------------------------------------------
*/

$response->send();



/*
|-------------------------------------------------------
|    Terminate application
|-------------------------------------------------------
*/

$kernel->terminate($request, $response);