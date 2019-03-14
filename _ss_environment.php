<?php
define('SS_ENVIRONMENT_TYPE', 'dev');

$host = (getenv('OPENSHIFT_MYSQL_DB_HOST')) ? getenv('OPENSHIFT_MYSQL_DB_HOST') : putenv('OPENSHIFT_MYSQL_DB_HOST=localhost') ;
$port = (getenv('OPENSHIFT_MYSQL_DB_PORT')) ? getenv('OPENSHIFT_MYSQL_DB_PORT') : putenv('OPENSHIFT_MYSQL_DB_PORT=3306');
$user = (getenv('OPENSHIFT_MYSQL_DB_USERNAME')) ? getenv('OPENSHIFT_MYSQL_DB_USERNAME') : putenv('OPENSHIFT_MYSQL_DB_USERNAME=root') ;
$pass = (getenv('OPENSHIFT_MYSQL_DB_PASSWORD')) ? getenv('OPENSHIFT_MYSQL_DB_PASSWORD') : putenv('OPENSHIFT_MYSQL_DB_PASSWORD=root') ;

define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
define('SS_DATABASE_SERVER', 'mysql');
define('SS_DATABASE_PORT', '3306');
define("SS_DATABASE_USERNAME", 'password');
define('SS_DATABASE_NAME', 'database');

define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

global $_FILE_TO_URL_MAPPING;
$openshift_app_url = (getenv('OPENSHIFT_APP_DNS')) ? getenv('OPENSHIFT_APP_DNS') : putenv('OPENSHIFT_APP_DNS=openshift_app_dns') ;
$_FILE_TO_URL_MAPPING[dirname(__FILE__)] = 'http://' . $openshift_app_url . '/';
