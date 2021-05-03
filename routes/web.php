<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('theme', function () {
    return view('theme');
});

Route::get('class', function () {
    return view('Classes.open_classes');
});
Route::get('invocies', function () {
    return view('Invocies.paid_invoices');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/all_members', [MemberController::class, 'index']);
Route::get('/active_members', [MemberController::class, 'active']);