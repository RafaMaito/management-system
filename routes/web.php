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

    // Route using resources
    Route::resource('supplier', App\Http\Controllers\SupplierController::class);
    Route::resource('client', App\Http\Controllers\ClientController::class);
    Route::resource('order', App\Http\Controllers\ClientController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('product-order', App\Http\Controllers\ProductOrderController::class);
    Route::resource('product-detail', App\Http\Controllers\ProductDetailController::class);
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
