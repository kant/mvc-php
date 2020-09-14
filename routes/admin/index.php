<?php

$app = app();

if (!$app->request->isRequestToAdminManagement()) {
  return;
}

// Home
$adminOptions = [
  'prefix' => '/admin',
  'controller' => 'Admin',
  'middleware' => ['Authenticate', 'Permissions']
];

$app->route->group($adminOptions, function($route) {

  // Home
  $route->add('/', 'Home');
});
