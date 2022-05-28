<?php

use App\Http\Controllers\Backend\AppointController;
use App\Http\Controllers\Backend\BloodController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.index');
});

Route::get('/appointment', function () {
    return view('frontend.pages.app');
})->name('appointment');

Route::post('appointment',[AppointController::class,'store2'])->name('app.store');

Route::get('/prevention', function () {
    return view('frontend.pages.prevention');
})->name('prevention');

Route::get('/faq', function () {
    return view('frontend.pages.faq');
})->name('faq');

Route::get('/doctor', function () {
    return view('frontend.pages.doctor');
})->name('doctor');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/prediction', function () {
    return view('frontend.pages.prediction');
})->name('prediction');

Route::get('/blood-donation', function () {
    return view('frontend.pages.blood');
})->name('blood');

Route::get('/data', function () {
    return view('file');
})->name('data');

Route::post('blood-donation',[BloodController::class,'store2'])->name('blood.store2');

Route::get('/dashboard', function () {
    return view('backend.pages.index');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
