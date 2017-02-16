<?php
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

try {
    require_once(__DIR__."/vendor/autoload.php");
    $controller = \Config\Parameters::get('INITIAL_CONTROLLER');
    $action = \Config\Parameters::get('INITIAL_ACTION');

    $app = new \Core\Application($controller, $action);
    header('Content-Type: text/html; charset=utf-8');
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    $app->run();
} catch ( \Exception $e ){
    error_log($e);
    if (\Config\Parameters::get('ENVIRONMENT_PRODUCTION') == false) {
        //Send exception details (not production):
        echo "Internal Error: $e";
    } else {
        //This produces a "Cannot establish communication channel" error
        //in the client, when deployed for production, without showing details:
        echo "Error";
    }
}
