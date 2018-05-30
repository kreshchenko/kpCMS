<?php

require_once 'vendor/autoload.php';

$app = new Silex\Application;
$app['debug'] = true;

$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'imkxiinm_kpcms',
        'user' => 'imkxiinm_admin',
        'password' => 'fcnivavn1958',
        'charset'   => 'utf8mb4',
    ),
));
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new App\Service\ViewServiceProvider());

$app->get('/', 'App\Controller\Front::getIndex');
$app->get('/history', 'App\Controller\Front::getHistory');
$app->get('/leadership', 'App\Controller\Front::getLeadership');
$app->get('/contacts', 'App\Controller\Front::getContacts');
$app->get('/poslugi', 'App\Controller\Front::getPoslugi');
$app->get('/temp', 'App\Controller\Front::getTemp');
$app->get('/skvinnytsia', 'App\Controller\Front::getSkVinnytsia');
$app->get('/integral', 'App\Controller\Front::getIntegral');
$app->get('/cms', 'App\Controller\Front::getCms');
$app->get('/login', 'App\Controller\Front::getLogin');
$app->post('/login', 'App\Controller\Front::postLogin');
$app->get('/logout', 'App\Controller\Front::getLogout');
$app->get('/info', 'App\Controller\Front::getInfo');
$app->get('/news/{id}', 'App\Controller\Front::getNews')
    ->assert('id', '\d+');
$app->get('/delete/{id}', 'App\Controller\Cabinet::deleteNews')
    ->assert('id', '\d+');
$app->get('/cabinet', 'App\Controller\Cabinet::getIndex')
    ->before('App\Controller\Cabinet::_before');
$app->post('/cabinet/toggle/{id}', 'App\Controller\Cabinet::postDisableSource')
    ->assert('id', '\d+')
    ->before('App\Controller\Cabinet::_before');
$app->post('/cabinet', 'App\Controller\Cabinet::postAddSource')
    ->before('App\Controller\Cabinet::_before');

$app->run();
