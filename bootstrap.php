<?php


//require_once 'model.php';

use Illuminate\Database\Capsule\Manager as Capsule;

define('BASE_PATH', __DIR__);

require BASE_PATH . '/vendor/autoload.php';

$config = require BASE_PATH . '/app/Config/config.php';
define('BASE_URL', $config['base_url']);
// TIME_ZONE
date_default_timezone_set($config['time_zone']);

define('VIEW_CACHE', $config['view_cache_activated']);

$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH . '/app/Config/database.php');
$capsule->setAsGlobal();
$capsule->bootEloquent();

// $loader = new Twig_Loader_Filesystem(BASE_PATH . '/app/Views');
// // BASE_PATH . '/app/Views/cache' << -- caching
// $twig = new Twig_Environment($loader, array(
//     'cache' => FALSE,
// ));

//echo $twig->render('base.html');

//echo $twig->render('home.html');

//echo $twig->render('index.html', array('name' => 'Fabien'));

//require_once BASE_PATH . '/app/Config/routes.php';