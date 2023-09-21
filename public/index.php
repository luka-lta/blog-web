<?php
declare(strict_types=1);

use BlogWeb\Route\Routes;
use DI\Bridge\Slim\Bridge;
use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();

try {
    $container = $containerBuilder->build();
    $app = Bridge::create($container);
    $app->addBodyParsingMiddleware();
    $app->addErrorMiddleware(true, true, true);
    Routes::getRoutes($app);
    $app->run();
} catch (Exception $exception) {
    print_r($exception->getMessage());
}