<?php
require ('C:\laragon\www\new project\myproject\app\Http\Controllers\ProductController.php');

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::Class,'index'] );

// Route::get('/',[ProductController::Class,'add'] );
