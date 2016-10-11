<?php

define('PATCH_CONFIG',dirname(__FILE__));
define('PATCH_APP',GLOBAL_PATCH.'/app');
define('PATCH_MODEL',PATCH_APP.'/models');
define('PATCH_CONTROLLER',PATCH_APP.'/controllers');
define('PATCH_VIEWS',PATCH_APP.'/views');

/**
* dato para establecer conexion con mysql
*
*/

define('_DB_USER_', 'root');
define('_DB_PASS_', '');
define('_DB_HOST_', 'localhost');
define('_DB_DATABASE_', 'iglesia');
define('_DB_SET_', 'UTF8');


/**
*	requerimos el resto de archivos para su procesamiento 
*	y ejecucion de nuestra aplicacion
*/
require_once  PATCH_CONFIG.'/View.php';
require_once  PATCH_CONFIG.'/ObjectModel.php';
require_once  PATCH_CONFIG.'/SystemRoute.php';
require_once  PATCH_CONFIG.'/Route.php';

