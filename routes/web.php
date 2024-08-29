<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientController as BaseClientController;
use App\Http\Controllers\Main\ClientController as MainClientController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


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

Route::get('/', function () {
        return view('welcome');
});

Route::resource('salon', SalonController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('sercat', ServiceCategoryController::class);
Route::resource('service', ServiceController::class);
Route::resource('booking', BookingController::class);
Route::resource('client', ClientController::class);
Route::get('/client', [ClientController::class, 'index']);

//Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/example', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/barbers', [MainController::class, 'barbers'])->name('barbers');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');
Route::get('/service', [MainController::class, 'service'])->name('service');
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/main', [MainController::class, 'index'])->name('main.index');


Route::get('/grid', function () {
    return view('grid');
});

Route::group(['middleware' => ['auth', 'client']], function () {
    Route::get('/', [ClientController::class, 'index']);
});

Route::get('/base', [BaseClientController::class, 'index']);

Route::get('/main', [MainClientController::class, 'index']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
