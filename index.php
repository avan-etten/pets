<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/11/2019
 * Time: 10:25 AM
 */

$f3 = Base::instance();

$f3->route('GET /', function() {
    //$view = new View;
    //echo $view->render('');
    echo "<h1>Pet Home</h1>";
});

$f3->run();
?>

