<?php

use Illuminate\Support\Facades\Route;

// using an string in the callback() place the laravel wait a controler method.
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');

Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'aboutus'])->name('site.aboutus');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('site.contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'save'])->name('site.contact');

Route::get('/login/{error?}', [App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('site.login');

Route::middleware('market')->prefix('market')->group(function () {
    Route::get('/user', function () {
        return 'Users';
    })->name('market.user');

    Route::get('/client-home', [App\Http\Controllers\ClientHomeController::class, 'index'])->name('market.clienthome');

    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('market.logout');

    Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('market.client');

    Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('market.supplier');
    Route::match(['get', 'post'], '/supplier/register', [App\Http\Controllers\SupplierController::class, 'register'])->name('market.supplier.register');
    Route::match(['get', 'post'], '/supplier/list', [App\Http\Controllers\SupplierController::class, 'list'])->name('market.supplier.list');
    Route::match(['get', 'post'], '/supplier/edit/{id}/{msg?}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('market.supplier.edit');

    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('market.product');
});

Route::fallback(function () {
    return 'The page you are looking for does not exist. Go back to the <a href="'.route('site.home').'">home page</a>';
});

// Route::get('/contact/{name}/{category_id}', function ($name, $category_id) {
//    return $name . ' - ' . $category_id;

// });

// Route::get('/about-us/{subject}/{message?}', function ($subject, $message = 'No message') {
//     return $subject . ' - ' . $message;
// })->where(['subject' => '[0-9]+', 'message' => '[A-Za-z]+']);