<?php 
/** Define absolute path */
define( 'PATH', __DIR__ . '/' );

/** Database name */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/**
 * Set global variables
 */
$GLOBALS[ 'default_controller' ] = 'user';

/**
 * Loading helper files
 * @see https://hey.com 
 **/
$helper_files = [ 'transient' , 'helper' ];
foreach( $helper_files as $file ){
	require 'helpers/' . $file . '.php';
}

/**
 * Loading core files
 * @see https://hey.com 
 **/
$core_files = [ 'core-controller' ];
foreach( $core_files as $file ){
	require 'core/' . $file . '.php';
}
