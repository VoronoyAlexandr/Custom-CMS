<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Engine\CMS;
use Engine\DI\DI;

try {
    // Dependency Injection
    $di = new DI();

    $di->set('test',['db'=>'db_object']);
    $di->set('test2',['db'=>'db_object']);

    $cms = new CMS($di);
    $cms->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}