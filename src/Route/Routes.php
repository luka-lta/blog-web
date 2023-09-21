<?php
declare(strict_types=1);

namespace BlogWeb\Route;

use BlogWeb\Controller\HelloController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

class Routes
{
    public static function getRoutes(App $app): void
    {
        $app->group('/blog', function (RouteCollectorProxy $group) {
            $group->get('/create', [HelloController::class, 'handleHello']);
        });
    }
}