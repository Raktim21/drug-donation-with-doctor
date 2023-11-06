<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\DrugShopController;
use Illuminate\Support\Facades\Route;

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

// require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login.submit');
    // Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('admin.password.request');
    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('admin.password.email');
    // Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('admin.password.reset');
    // Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('admin.password.store');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});



Route::prefix('admin')->group(function () {
    
    Route::middleware('auth')->group(function () {
        
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('update/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

        Route::middleware('admin')->group(function(){

            Route::controller(AdminController::class)->group(function(){
               Route::get('admin', 'index')->name('admin.admin.index');
               Route::get('admin/create', 'create')->name('admin.admin.create');
               Route::post('admin', 'store')->name('admin.admin.store');
               Route::get('admin/{id}/edit', 'edit')->name('admin.admin.edit');
               Route::put('admin/{id}', 'update')->name('admin.admin.update');
               Route::delete('admin/{id}', 'destroy')->name('admin.admin.destroy');
            });
    
            Route::controller(UserController::class)->group(function(){
                Route::get('users', 'index')->name('admin.users.index');
                Route::get('users/create', 'create')->name('admin.users.create');
                Route::post('users', 'store')->name('admin.users.store');
                Route::get('users/{id}/edit', 'edit')->name('admin.users.edit');
                Route::put('users/{id}', 'update')->name('admin.users.update');
                Route::delete('users/{id}', 'destroy')->name('admin.users.destroy');
                Route::post('users/active/{id}', 'makeActive')->name('admin.users.active');
            });
        });


        Route::controller(DrugController::class)->group(function(){
            Route::get('drugs', 'index')->name('user.drugs.index');
            Route::get('drugs/create', 'create')->name('user.drugs.create');
            Route::post('drugs', 'store')->name('user.drugs.store');
            Route::delete('drugs/{id}', 'destroy')->name('user.drugs.destroy');
        });



        Route::controller(DrugShopController::class)->group(function(){
            Route::get('drugshops', 'index')->name('user.drugshops.index');
            Route::get('drugshops/request-list', 'requestList')->name('user.drugshops.requestList');
            Route::post('drugshops/request-drug', 'requestDrug')->name('user.drugshops.requestDrug');
            Route::post('drugshops/approve-request', 'approveRequest')->name('user.drugshops.approveRequest');
        });



    });



});


