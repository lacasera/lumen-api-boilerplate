<?php

/*
|--------------------------------------------------------------------------
| V1 Api Routes
|--------------------------------------------------------------------------
*/

$router->get('/health', function () use ($router) {
    return response()->json([
        'message' => 'api is healthy',
        'apiVersion' => 'v1',
        'lumenVersion' => $router->app->version()
    ]);
});


$router->group(['namespace' => 'Api\V1'], function() use($router) {
    $router->group(['namespace' => 'Auth'], function() use ($router) {
        $router->post('register', 'RegisterController');
        $router->post('login', 'LoginController');
    });
    
    $router->group(['middleware' => 'auth:api'], function() use($router) {
    $router->get('me', 'UserController@me');
    $router->get('logout', 'UserController@logout');
    $router->get('token/refresh',  'UserController@refresh');
    });
});

