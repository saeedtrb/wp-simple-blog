<?php 
/*================In the name of Allah================*/
/**
 * @package     Simple Blog
 * @category    Theme
 * @author      Saeed Torabi <saeedtrb@yahoo.com>
 * @link        https://www.saeedtrb.com
 */
if(!defined('DS') )
    define('DS', DIRECTORY_SEPARATOR);

define( 'ST_THEME_PATH' , __DIR__ );
define( 'ST_TEMPLATES_PATH' , ST_THEME_PATH . DS . 'templates' );
define( 'ST_THEME_URL' , get_template_directory_uri() );
define( 'ST_ASSETS_URL' , ST_THEME_URL . "/Assets" );
define( 'ST_LIBS_URL' , ST_ASSETS_URL . "/libs" );

/*====================================================*/
/*  Load required files
/*====================================================*/
require_once ST_THEME_PATH . DS . 'includes' . DS . 'facilities.php';
?>