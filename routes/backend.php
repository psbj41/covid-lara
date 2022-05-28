<?php

use App\Http\Controllers\Backend\AppointController;
use App\Http\Controllers\Backend\BloodController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
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

Route::group(['middleware'=>['auth']],function(){

    //User
    Route::resource('user', UserController::class);

    //Role
    Route::get('/role/{role}/assign-permission',[RoleController::class,'assignPermissionView'])->name('assign.permission');
    Route::post('/role/{role}/assign-permission',[RoleController::class,'assignPermission'])->name('assign.permission.store');
    Route::resource('role', RoleController::class);

    //Permission
    Route::resource('permission', PermissionController::class);

    //appointments
    Route::resource('appoint', AppointController::class);

    //Blood
    Route::resource('blood', BloodController::class);

});
