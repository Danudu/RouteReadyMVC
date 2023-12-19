<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    // root config
    define('ROOT', 'http://localhost/mvc/public');

    // db config
    define('DBNAME','routeready');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');
}
else
{
    //root config
    define('ROOT', 'https://www.yourdomain.com');

    // db config
    define('DBNAME','routeready');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');
}
