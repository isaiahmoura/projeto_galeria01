<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/ver_img', 'HomeController@ver_img');
$router->get('/perfil', 'HomeController@perfil');
$router->get('/sair', 'HomeController@sair');

$router->get('/login', 'LoginController@index');
$router->get('/cadastro', 'LoginController@cadastro');
$router->post('/login', 'LoginController@acessar');