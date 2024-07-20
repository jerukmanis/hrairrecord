<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

use Slim\Views\PhpRenderer;
use Slim\Csrf\Guard;
use Psr\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Doctrine\DBAL\Logging\LoggerChain;
use Doctrine\DBAL\Logging\DebugStack;

return [
    "cache" => function (ContainerInterface $c) {
        return new \Slim\HttpCache\CacheProvider();
    },
    "view" => function (ContainerInterface $c) {
        return new PhpRenderer("views/");
    },
    "flash" => function (ContainerInterface $c) {
        return new \Slim\Flash\Messages();
    },
    "audit" => function (ContainerInterface $c) {
        $logger = new Logger("audit"); // For audit trail
        $logger->pushHandler(new AuditTrailHandler("audit.log"));
        return $logger;
    },
    "log" => function (ContainerInterface $c) {
        global $RELATIVE_PATH;
        $logger = new Logger("log");
        $logger->pushHandler(new RotatingFileHandler($RELATIVE_PATH . "log.log"));
        return $logger;
    },
    "sqllogger" => function (ContainerInterface $c) {
        $loggers = [];
        if (Config("DEBUG")) {
            $loggers[] = $c->get("debugstack");
        }
        return (count($loggers) > 0) ? new LoggerChain($loggers) : null;
    },
    "csrf" => function (ContainerInterface $c) {
        global $ResponseFactory;
        return new Guard($ResponseFactory, Config("CSRF_PREFIX"));
    },
    "debugstack" => \DI\create(DebugStack::class),
    "debugsqllogger" => \DI\create(DebugSqlLogger::class),
    "security" => \DI\create(AdvancedSecurity::class),
    "profile" => \DI\create(UserProfile::class),
    "language" => \DI\create(Language::class),
    "timer" => \DI\create(Timer::class),
    "session" => \DI\create(HttpSession::class),

    // Tables
    "air2208" => \DI\create(Air2208::class),
    "air2209" => \DI\create(Air2209::class),
    "air2210" => \DI\create(Air2210::class),
    "air2211" => \DI\create(Air2211::class),
    "air2212" => \DI\create(Air2212::class),
    "air2301" => \DI\create(Air2301::class),
    "air2302" => \DI\create(Air2302::class),
    "air2303" => \DI\create(Air2303::class),
    "air2304" => \DI\create(Air2304::class),
    "air2305" => \DI\create(Air2305::class),
    "air2306" => \DI\create(Air2306::class),
    "air2307" => \DI\create(Air2307::class),
    "air2308" => \DI\create(Air2308::class),
    "air2309" => \DI\create(Air2309::class),
    "air2310" => \DI\create(Air2310::class),
    "air2311" => \DI\create(Air2311::class),
    "air2312" => \DI\create(Air2312::class),
    "air2401" => \DI\create(Air2401::class),
    "air2402" => \DI\create(Air2402::class),
    "air2403" => \DI\create(Air2403::class),
    "air2404" => \DI\create(Air2404::class),
    "air2405" => \DI\create(Air2405::class),
    "air2406" => \DI\create(Air2406::class),
    "analisaair" => \DI\create(Analisaair::class),
    "analisaairtesting" => \DI\create(Analisaairtesting::class),
    "migrations" => \DI\create(Migrations::class),
];
