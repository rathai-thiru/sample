<?php
define('SS_ENVIRONMENT_TYPE', 'dev');

$host = (getenv('OPENSHIFT_MYSQL_DB_HOST')) ? getenv('MYSQL_DATABASE_HOST') : putenv('MYSQL_DATABASE_HOST=localhost') ;
$port = (getenv('OPENSHIFT_MYSQL_DB_PORT')) ? getenv('MYSQL_DATABASE_PORT') : putenv('MYSQL_DATABASE_HOST=3306');
$user = (getenv('MYSQL_DATABASE_USER')) ? getenv('MYSQL_DATABASE_USER') : putenv('OPENSHIFT_MYSQL_DB_USERNAME=mysqluser') ;
$pass = (getenv('MYSQL_DATABASE_PASSWORD')) ? getenv('MYSQL_DATABASE_PASSWORD') : putenv('MYSQL_DATABASE_PASSWORD=mysqluserpassword') ;

define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
define('SS_DATABASE_SERVER', getenv('MYSQL_DATABASE_HOST'));
define('SS_DATABASE_PORT', getenv('MYSQL_DATABASE_PORT'));
define("SS_DATABASE_USERNAME", getenv('MYSQL_DATABASE_USER'));
define('SS_DATABASE_PASSWORD', getenv('MYSQL_DATABASE_NAME'));
define('SS_DATABASE_NAME', getenv('MYSQL_DATABASE_NAME'));

define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

global $_FILE_TO_URL_MAPPING;
$openshift_app_url = (getenv('OPENSHIFT_APP_DNS')) ? getenv('OPENSHIFT_APP_DNS') : putenv('OPENSHIFT_APP_DNS=openshift_app_dns') ;
$_FILE_TO_URL_MAPPING[dirname(__FILE__)] = 'http://' . $openshift_app_url . '/';
