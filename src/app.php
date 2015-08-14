<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\RoutingServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\SecurityServiceProvider;
use Symfony\Component\Translation\Loader\YamlFileLoader;
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
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'app' => array(
            'pattern' => '^/',
            'http' => true,
            'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
            'logout' => array('logout_path' => '/logout'),
            'anonymous' => true,
            'users' => $app['login'] = (function () use ($app) {
                return new Morfeu\Business\Service\UserService($app['orm.em'], $app);
            })
            ),
        ),
        'security.access_rules' => array(
            array('^/login', 'IS_AUTHENTICATED_ANONYMOUSLY'),
            array('^/', 'ROLE_ADMIN')
        ),
    ));

    $app->register(new DerAlex\Pimple\YamlConfigServiceProvider('../config/config.yml'));
    $app->register(new Silex\Provider\TranslationServiceProvider(), array(
        'locale' => 'pt-br'
    ));

    $app->register( new Silex\Provider\DoctrineServiceProvider(), array(
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

    $arrayLanguage[1]='pt-br';
    $language = $app['session']->get('language');
    if (!isset($language)) {
        $app['session']->set('language', 1);
    }
    $languageId = $app['session']->get('language');
    $app->register(new Silex\Provider\TranslationServiceProvider(), array(
        'locale_fallbacks' => array($arrayLanguage[$languageId]),
    ));

    $app['bank.service'] = function () use ($app) {
        return new Morfeu\Business\Service\BankService($app["orm.em"]);
    };

    $app['bankUser.service'] = function () use ($app) {
        return new Morfeu\Business\Service\BankUserService($app["orm.em"]);
    };

    return $app;
