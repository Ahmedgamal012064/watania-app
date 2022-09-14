<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();





Route::group(['namespace' => 'Admin'], function () {
    Route::get('/Editprofile', [App\Http\Controllers\Admin\DashboardController::class, 'editprofile'])->name('admin.editprofile');
    Route::post('/updateprofile/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updateprofile'])->name('admin.updateprofile');


    ######################### Begin cars.types Routes ########################
    Route::group(['prefix' => 'cars/types'], function () {
        Route::get('/',[App\Http\Controllers\Admin\CarTypeController::class, 'index']) -> name('admin.cars.types');
        Route::get('create',[App\Http\Controllers\Admin\CarTypeController::class, 'create']) -> name('admin.cars.types.create');
        Route::post('store', [App\Http\Controllers\Admin\CarTypeController::class, 'store']) -> name('admin.cars.types.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CarTypeController::class, 'edit']) -> name('admin.cars.types.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CarTypeController::class, 'update']) -> name('admin.cars.types.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\CarTypeController::class, 'destroy']) -> name('admin.cars.types.delete');
    });
    ######################### End cars.types Routes  ########################

    ######################### Begin cars.brands Routes ########################
       Route::group(['prefix' => 'cars/brands'], function () {
        Route::get('/',[App\Http\Controllers\Admin\CarBrandController::class, 'index']) -> name('admin.cars.brands');
        Route::get('create',[App\Http\Controllers\Admin\CarBrandController::class, 'create']) -> name('admin.cars.brands.create');
        Route::post('store', [App\Http\Controllers\Admin\CarBrandController::class, 'store']) -> name('admin.cars.brands.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CarBrandController::class, 'edit']) -> name('admin.cars.brands.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CarBrandController::class, 'update']) -> name('admin.cars.brands.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\CarBrandController::class, 'destroy']) -> name('admin.cars.brands.delete');
    });
    ######################### End cars.brands Routes  ########################

    ######################### Begin cars.models Routes ########################
           Route::group(['prefix' => 'cars/models'], function () {
            Route::get('/',[App\Http\Controllers\Admin\CarModelController::class, 'index']) -> name('admin.cars.models');
            Route::get('create',[App\Http\Controllers\Admin\CarModelController::class, 'create']) -> name('admin.cars.models.create');
            Route::post('store', [App\Http\Controllers\Admin\CarModelController::class, 'store']) -> name('admin.cars.models.store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\CarModelController::class, 'edit']) -> name('admin.cars.models.edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\CarModelController::class, 'update']) -> name('admin.cars.models.update');
            Route::get('delete/{id}',[App\Http\Controllers\Admin\CarModelController::class, 'destroy']) -> name('admin.cars.models.delete');
        });
    ######################### End cars.models Routes  ########################

    ######################### Begin cars.colors Routes ########################
      Route::group(['prefix' => 'cars/colors'], function () {
        Route::get('/',[App\Http\Controllers\Admin\CarColorController::class, 'index']) -> name('admin.cars.colors');
        Route::get('create',[App\Http\Controllers\Admin\CarColorController::class, 'create']) -> name('admin.cars.colors.create');
        Route::post('store', [App\Http\Controllers\Admin\CarColorController::class, 'store']) -> name('admin.cars.colors.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CarColorController::class, 'edit']) -> name('admin.cars.colors.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CarColorController::class, 'update']) -> name('admin.cars.colors.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\CarColorController::class, 'destroy']) -> name('admin.cars.colors.delete');
    });

    ######################### End cars.colors Routes  ########################

    ######################### Begin cars.kinds Routes ########################
    Route::group(['prefix' => 'cars/kinds'], function () {
        Route::get('/',[App\Http\Controllers\Admin\CarKindController::class, 'index']) -> name('admin.cars.kinds');
        Route::get('create',[App\Http\Controllers\Admin\CarKindController::class, 'create']) -> name('admin.cars.kinds.create');
        Route::post('store', [App\Http\Controllers\Admin\CarKindController::class, 'store']) -> name('admin.cars.kinds.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CarKindController::class, 'edit']) -> name('admin.cars.kinds.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CarKindController::class, 'update']) -> name('admin.cars.kinds.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\CarKindController::class, 'destroy']) -> name('admin.cars.kinds.delete');
    });
    ######################### End cars.kinds Routes  ########################

    ######################### Begin cars Routes ########################
    Route::group(['prefix' => 'cars'], function () {
        Route::get('/',[App\Http\Controllers\Admin\CarController::class, 'index']) -> name('admin.cars');
        Route::get('create',[App\Http\Controllers\Admin\CarController::class, 'create']) -> name('admin.cars.create');
        Route::post('store', [App\Http\Controllers\Admin\CarController::class, 'store']) -> name('admin.cars.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CarController::class, 'edit']) -> name('admin.cars.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CarController::class, 'update']) -> name('admin.cars.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\CarController::class, 'destroy']) -> name('admin.cars.delete');
    });
    ######################### End cars Routes  ########################

    ######################### Begin drivers Routes ########################
    Route::group(['prefix' => 'drivers'], function () {
        Route::get('/',[App\Http\Controllers\Admin\DriverController::class, 'index']) -> name('admin.drivers');
        Route::get('create',[App\Http\Controllers\Admin\DriverController::class, 'create']) -> name('admin.drivers.create');
        Route::post('store', [App\Http\Controllers\Admin\DriverController::class, 'store']) -> name('admin.drivers.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\DriverController::class, 'edit']) -> name('admin.drivers.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\DriverController::class, 'update']) -> name('admin.drivers.update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\DriverController::class, 'destroy']) -> name('admin.drivers.delete');
    });
    ######################### End drivers Routes  ########################

    ######################### Begin users Routes ########################Done
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index']) -> name('admin.users');
        Route::get('create', [App\Http\Controllers\Admin\UserController::class, 'create']) -> name('admin.users.create');
        Route::post('store', [App\Http\Controllers\Admin\UserController::class, 'store']) -> name('admin.users.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit']) -> name('admin.users.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']) -> name('admin.users.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']) -> name('admin.users.delete');
    });
    ######################### End users Routes  ########################


    ######################### Begin complains Routes ########################Done
    Route::group(['prefix' => 'complains'], function () {
        Route::get('/', [App\Http\Controllers\Admin\ComplainController::class, 'index']) -> name('admin.complains');
        Route::get('create', [App\Http\Controllers\Admin\ComplainController::class, 'create']) -> name('admin.complains.create');
        Route::post('store', [App\Http\Controllers\Admin\ComplainController::class, 'store']) -> name('admin.complains.store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\ComplainController::class, 'edit']) -> name('admin.complains.edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\ComplainController::class, 'update']) -> name('admin.complains.update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ComplainController::class, 'destroy']) -> name('admin.complains.delete');
    });
    ######################### End complains Routes  ########################


});
