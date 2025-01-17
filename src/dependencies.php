<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $container['UsuarioController'] = function ($container) {
        return new \src\Controller\UsuarioController;
    };
    $container['ClienteController'] = function ($container) {
        return new \src\Controller\ClienteController;
    };
    $container['FuncionarioController'] = function ($container) {
        return new \src\Controller\FuncionarioController;
    };
    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // // PDO
    // $container['db'] = function ($c) {
    //     $db = $c['settings']['db'];
    //     $pdo = new PDO('mysql:host='.$db['host'] . ';dbname='. $db['dbname'], $db['user'], $db['pass']);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //     return $pdo;
    // };

};
