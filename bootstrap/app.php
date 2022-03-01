<?php

/*
|-------------------------------------------------------------------
|    Create new application
|-------------------------------------------------------------------
*/

$app = new \Laventure\Foundation\Application\Application(
    realpath(__DIR__.'/../')
);



/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/

$app->singleton(
    \Laventure\Contract\Http\Kernel::class,
    \App\Http\Kernel::class
);

$app->singleton(
    \Laventure\Contract\Console\Kernel::class,
    \App\Console\Kernel::class
);

$app->singleton(
    \Laventure\Contract\Debug\ExceptionHandler::class,
    \App\Exception\ErrorHandler::class
);



/*
|-------------------------------------------------------------------
|    Return instance of application
|-------------------------------------------------------------------
*/
return $app;