<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;

Route::get('/', [UserController::class, 'index']);
Route::get('usuarios', [MainController::class, 'list_users']);
Route::get('remove_user/{id}', [MainController::class, 'remove_user']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/d_casos', function(){
    return view('elements.d_casos');
});

Route::get('/d_alertas', function(){
    return view('elements.d_alertas');
});

Route::get('/d_mapa', function(){
    return view('elements.d_mapa');
});

Route::get('/icon-tabler', function(){
    return view('elements.icon-tabler');
});

