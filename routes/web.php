<?php

use App\Http\Controllers\CMSController;
use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'home']);
Route::get('/detail-news/{id}', [Homepage::class, 'detail_news']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [CMSController::class, 'login'])->name('login');
    Route::post('/login-auth', [CMSController::class, 'login_auth']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cms', [CMSController::class, 'master_cms']);

    //HCO Page
    Route::get('/cms-hco', [CMSController::class, 'master_cms_hco']);
    Route::post('/add-carousel', [CMSController::class, 'add_carousel_home']);
    Route::get('/del-carousel/{id}', [CMSController::class, 'del_carousel_home']);
    
    //QS Page
    Route::get('/cms-qs', [CMSController::class, 'master_cms_qs']);
    Route::post('/add-news', [CMSController::class, 'add_news']);
    Route::get('/del-news/{id}', [CMSController::class, 'del_news']);
    Route::get('/view-caption/{id}', [CMSController::class, 'view_caption']);

    Route::get('/logout', [CMSController::class, 'logout'])->name('logout');
});