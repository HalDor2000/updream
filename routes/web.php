<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;



Route::view('/', 'pages.home')->name('home');
Route::view('/portafolio', 'pages.portafolio')->name('portafolio');
Route::view('/servicios', 'pages.servicios')->name('servicios');
Route::view('/contacto', 'pages.contacto')->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');
