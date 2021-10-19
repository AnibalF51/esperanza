<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index']);
Route::get('registrousuario', [HomeController::class, 'registrousuario'])->name('admin.registrousuario');