<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'thanks']);
Route::get('/index', [AuthorController::class, 'index']);
Route::post('/index', [AuthorController::class, 'create']);