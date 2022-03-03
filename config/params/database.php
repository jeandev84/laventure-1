<?php

/*
|------------------------------------------------------------------
|     CONNECTION TO DATABASE [ mysql, sqlite, pgsql ]
|------------------------------------------------------------------
*/


return [
    'connection' => env('DB_TYPE', 'mysql'),
    'database'   => env('DB_NAME', 'laventure'),
    'host'       => env('DB_HOST', '127.0.0.1'),
    'port'       => env('DB_PORT', '3306'),
    'username'   => env('DB_USER', 'root'),
    'password'   => env('DB_PASS', ''),
    'collation'  => 'utf8_unicode_ci',
    'charset'    => 'utf8',
    'prefix'     => '',
    'engine'     => 'MyISAM', // InnoDB
    'options'    => [
        'commands' => 'SET SQL_MODE=ANSI_QUOTES'
    ],
    'migration_path' => 'database/migrations/' // specific for model
];