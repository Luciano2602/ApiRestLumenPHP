<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group([
        'prefix' => 'api/chamados'
    ], function() use ($router)
{
    $router->get('', 'cas_chamadosController@index');  
});

$router->group([
        'prefix' => 'api/categoria3'
    ], function() use ($router)
{
    $router->get('', 'cas_categoria_3Controller@index');  
});








// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('foo', function () {
//     return 'Hello World';
// });

// $router->get('user/{id}', function ($id) {
//     return 'User '.$id;
// });
// //posts/luciano/comments/vai%20carai
// $router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
//     return 'teste eu sou foda ' . $postId . ' ' . $commentId;
// });

// // $router->get('api/chamados', function () {
// //     // return 'vai saooooooo pauloooooo';
// //     return redirect()->route('app/Http/Controllers/cas_chamadosController');
// // });



// //grupo de rotas
// $app->group([
//     'prefix' => 'api/chamados',
//     'namespace' => 'App\Http\Controllers'
// ], function() use ($app){
//     $app->get('', 'cas_chamadosController@index');
// });

/*
$router->group(['namespace' => 'Admin'], function() use ($router)
{
    // Using The "App\Http\Controllers\Admin" Namespace...

    $router->group(['namespace' => 'User'], function() use ($router) {
        // Using The "App\Http\Controllers\Admin\User" Namespace...
    });
});
*/

