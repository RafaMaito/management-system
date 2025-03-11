<?php

use Illuminate\Support\Facades\Route;

// using an string in the callback() place the laravel wait a controler method. 
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/about-us', function () {
    return 'Hello world about-us';
 });
 
 Route::get('/contact', function () {
    return 'Hello world contact';
 });
 
 Route::get('/contact/{name}', function ($name) {
   return $name;
});

// Route::get('/contact/{name}/{category_id}', function ($name, $category_id) {
//    return $name . ' - ' . $category_id;
   
// });

// Route::get('/about-us/{subject}/{message?}', function ($subject, $message = 'No message') {
//     return $subject . ' - ' . $message;
// })->where(['subject' => '[0-9]+', 'message' => '[A-Za-z]+']);