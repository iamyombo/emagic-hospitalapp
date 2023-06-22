<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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

Route::get('/patients', function () {
    return view('patients.index');
})->name('patients');

Route::get('/wardsnbeds', function () {
    return view('wardsnbeds.index');
})->name('wardsnbeds');

Route::get('/medservices', function () {
    return view('medservices.index');
})->name('medservices');

// AppSetting Module Routes

Route::get('/appsettings', function () {
    return view('appsettings.index');
})->name('appsettings');

// AppSettings >> Country
Route::get('/appsettingscountry', [CountryController::class, 'create'])->name('country');
Route::post('/appsettingscountry', [CountryController::class, 'store']);
Route::get('/showcountry', [CountryController::class, 'show']);


//LogOIn Route.

Route::get('/login', function () {
    return view('/login');
});

//LogOut Route.

Route::get('/logout', function () {
    return view('logout');
});