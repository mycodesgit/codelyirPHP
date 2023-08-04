<?php
	
	error_reporting(E_ALL);
	session_start();	

	define( 'ROOT_DIR', realpath(dirname(__FILE__)) ); // absolute path of the directory	
	define( 'DIR', ( ( dirname( $_SERVER[ 'PHP_SELF' ] ) == "/" ) ? "" : dirname( $_SERVER['PHP_SELF']) ) ); // directory name
	define( 'SITE_URL', ( isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : "http://") . $_SERVER['SERVER_NAME'] . ( isset( $_SERVER[ 'SERVER_PORT' ] ) ? ":" . $_SERVER[ 'SERVER_PORT' ] : "") . DIR ); // absolute URL of the site
	define('DS', DIRECTORY_SEPARATOR);
	define( 'ACCESS', true );		

	require 'config.php';	
	require 'init.php';
	require 'config/functions.php';
	require 'config/custom_functions.php';	
	require 'web/authentication.php';	
	require 'config/actions.php';			
	require 'config/page.php';


	if( $DB )
	$DB->close();