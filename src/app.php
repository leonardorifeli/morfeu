<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\RoutingServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\SessionServiceProvider;

use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Pimple\Container;

$app = new Application();
$app->register(new SessionServiceProvider());

$app['session']->start();

$app->register(new RoutingServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app->register(new FormServiceProvider());

$app->register(new DerAlex\Pimple\YamlConfigServiceProvider('../config/config.yml'));
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale' => 'pt-br'
));


$app->register(
new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options'    => array(
        'driver' => $app['config']['database']['driver'],
        'host'       => $app['config']['database']['host'],
        'dbname' => $app['config']['database']['database'],
        'user' => $app['config']['database']['user'],
        'password' => $app['config']['database']['password'],
        'charset'       => 'utf8',
        'driverOptions' => array(1002 => 'SET NAMES utf8',),
    ),
));

$app->register(new DoctrineOrmServiceProvider, array(
    "orm.proxies_dir" => __DIR__."/tmp/proxies",
    "orm.em.options" => array(
        "mappings" => array(
            array(
                "type" => "annotation",
                "namespace" => "Morfeu\Entity",
                "path" => __DIR__."src/Morfeu/Entity",
            )
        ),
    ),
));

$app['asset_path'] = '/morfeu/web';

/*
$app['tenant.service'] = function () use ($app) {
    return new Morfeu\Business\Service\TenantService($app["orm.em"]);
};
*/

return $app;
