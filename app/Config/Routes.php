<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AuthController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// PÁGINA DE INICIO
$routes->get('/', 'AuthController::index');

// AUTENTICACIÓN
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::register');
$routes->get('logout', 'AuthController::logout');

// DASHBOARD Y PERFIL
$routes->get('dashboard', 'HomeController::dashboard');
$routes->get('profile', 'HomeController::profile');

// TAREAS
$routes->get('tasks', 'TasksController::index');
$routes->get('tasks/create', 'TasksController::create');
$routes->post('tasks/create', 'TasksController::create');
$routes->get('tasks/(:num)', 'TasksController::show/$1');
$routes->get('tasks/edit/(:num)', 'TasksController::edit/$1');
$routes->post('tasks/edit/(:num)', 'TasksController::edit/$1');
$routes->get('tasks/delete/(:num)', 'TasksController::delete/$1');

// USUARIOS (solo admin)
$routes->get('users', 'UsersController::index');
$routes->get('users/create', 'UsersController::create');
$routes->post('users/create', 'UsersController::create');
$routes->get('users/(:num)', 'UsersController::show/$1');
$routes->get('users/edit/(:num)', 'UsersController::edit/$1');
$routes->post('users/edit/(:num)', 'UsersController::edit/$1');
$routes->get('users/delete/(:num)', 'UsersController::delete/$1');