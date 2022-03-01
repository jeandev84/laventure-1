<?php

/*
|----------------------------------------------------------------------
|   Stimulate Server Internal
|   Run command : php -S localhost:<port[ex : 8000 ]> -t public -d display_errors=1 server.php
|   Test application in your browser
|----------------------------------------------------------------------
*/

use Laventure\Foundation\Server\ServerInternal;

require_once __DIR__.'/vendor/autoload.php';


$server = new ServerInternal(__DIR__.'/public/index.php');
return $server->run();