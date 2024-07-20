<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

// Handle Routes
return function (App $app) {
    // air2310
    $app->map(["GET","POST","OPTIONS"], '/Air2310List[/{id}]', Air2310Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2310List-air2310-list'); // list
    $app->group(
        '/air2310',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2310Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2310/list-air2310-list-2'); // list
        }
    );

    // air2311
    $app->map(["GET","POST","OPTIONS"], '/Air2311List[/{id}]', Air2311Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2311List-air2311-list'); // list
    $app->group(
        '/air2311',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2311Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2311/list-air2311-list-2'); // list
        }
    );

    // air2312
    $app->map(["GET","POST","OPTIONS"], '/Air2312List[/{id}]', Air2312Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2312List-air2312-list'); // list
    $app->group(
        '/air2312',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2312Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2312/list-air2312-list-2'); // list
        }
    );

    // air2401
    $app->map(["GET","POST","OPTIONS"], '/Air2401List[/{id}]', Air2401Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2401List-air2401-list'); // list
    $app->group(
        '/air2401',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2401Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2401/list-air2401-list-2'); // list
        }
    );

    // air2402
    $app->map(["GET","POST","OPTIONS"], '/Air2402List[/{id}]', Air2402Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2402List-air2402-list'); // list
    $app->group(
        '/air2402',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2402Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2402/list-air2402-list-2'); // list
        }
    );

    // air2403
    $app->map(["GET","POST","OPTIONS"], '/Air2403List[/{id}]', Air2403Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2403List-air2403-list'); // list
    $app->group(
        '/air2403',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2403Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2403/list-air2403-list-2'); // list
        }
    );

    // air2404
    $app->map(["GET","POST","OPTIONS"], '/Air2404List[/{id}]', Air2404Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2404List-air2404-list'); // list
    $app->group(
        '/air2404',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2404Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2404/list-air2404-list-2'); // list
        }
    );

    // air2405
    $app->map(["GET","POST","OPTIONS"], '/Air2405List[/{id}]', Air2405Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2405List-air2405-list'); // list
    $app->group(
        '/air2405',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2405Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2405/list-air2405-list-2'); // list
        }
    );

    // air2406
    $app->map(["GET","POST","OPTIONS"], '/Air2406List[/{id}]', Air2406Controller::class . ':list')->add(PermissionMiddleware::class)->setName('Air2406List-air2406-list'); // list
    $app->map(["GET","OPTIONS"], '/Air2406View[/{id}]', Air2406Controller::class . ':view')->add(PermissionMiddleware::class)->setName('Air2406View-air2406-view'); // view
    $app->group(
        '/air2406',
        function (RouteCollectorProxy $group) {
            $group->map(["GET","POST","OPTIONS"], '/' . Config("LIST_ACTION") . '[/{id}]', Air2406Controller::class . ':list')->add(PermissionMiddleware::class)->setName('air2406/list-air2406-list-2'); // list
            $group->map(["GET","OPTIONS"], '/' . Config("VIEW_ACTION") . '[/{id}]', Air2406Controller::class . ':view')->add(PermissionMiddleware::class)->setName('air2406/view-air2406-view-2'); // view
        }
    );

    // error
    $app->map(["GET","POST","OPTIONS"], '/error', OthersController::class . ':error')->add(PermissionMiddleware::class)->setName('error');

    // Swagger
    $app->get('/' . Config("SWAGGER_ACTION"), OthersController::class . ':swagger')->setName(Config("SWAGGER_ACTION")); // Swagger

    // Index
    $app->get('/[index]', OthersController::class . ':index')->add(PermissionMiddleware::class)->setName('index');

    // Route Action event
    if (function_exists(PROJECT_NAMESPACE . "Route_Action")) {
        Route_Action($app);
    }

    /**
     * Catch-all route to serve a 404 Not Found page if none of the routes match
     * NOTE: Make sure this route is defined last.
     */
    $app->map(
        ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
        '/{routes:.+}',
        function ($request, $response, $params) {
            $error = [
                "statusCode" => "404",
                "error" => [
                    "class" => "text-warning",
                    "type" => Container("language")->phrase("Error"),
                    "description" => str_replace("%p", $params["routes"], Container("language")->phrase("PageNotFound")),
                ],
            ];
            Container("flash")->addMessage("error", $error);
            return $response->withStatus(302)->withHeader("Location", GetUrl("error")); // Redirect to error page
        }
    );
};
