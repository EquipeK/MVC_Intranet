<?php
define('WEBROOT',dirname(__FILE__));
define('ROOT',dirname(WEBROOT));
echo ROOT;

define('DS','/');
define('BASE_URL','http://localhost/mvcbachelor3/web');
define('IMAGE','http://localhost/mvcbachelor3/web/images');
define('NAME',"Rubis");
define('PREFIX',"cockpit");
require ROOT . '/app/App.php';
App::load();
new Core\Dispatcher();