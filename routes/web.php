<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//LoginRegister
$router->get('simpanregistrasi' ,['uses' => 'LoginController@simpanregistrasi']);
$router->post('register' ,['uses' => 'LoginController@register']);
$router->get('login' ,['uses' => 'LoginController@index']);
$router->post('postlogin' ,['uses' => 'LoginController@postlogin']);

$router->group(['prefix'=> 'petshop','middleware'=>'user'] , function() use ($router){

    // Melihatkan Semua Data
    $router->get('kontak',['uses' => 'KontakController@index']);

    // Melihatkan Data yang dipilih
    $router->get('kontak/{id}',['uses' => 'KontakController@show']);

    // Menghapus Data
    $router->delete('kontak/{id}',['uses' => 'KontakController@destroy']);

    // MengUpdate Data (Kalau Perlu)
    $router->put('kontak/{id}',['uses' => 'KontakController@update']);

    // Membuat Data/ Menambahkan Data
    $router->post('kontak',['uses' => 'KontakController@create']);

    //Menunjukan Data Pets
    $router->get('pet' ,['uses' => 'PetController@index']);

    //Membuat Data Pets
    $router->post('pet' ,['uses' => 'PetController@create']);
    
    //Mengedit Data Pets
    $router->put('pet/{id}' ,['uses' => 'PetController@update']);
    
    //Menghapus Data Pets
    $router->delete('pet/{id}' ,['uses' => 'PetController@destroy']);
});