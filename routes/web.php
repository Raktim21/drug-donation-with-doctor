<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\DrugRequestController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\DoctorAppointmrntController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\DrugShopController;
use App\Http\Controllers\UserAppoinmentController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/support-team', [FrontendController::class, 'supportTeam'])->name('suppopt.team');



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



Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('update/password', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    

    Route::controller(UserController::class)->group(function(){
        Route::get('users', 'index')->name('admin.users.index')->middleware('permission:user-list');
        Route::get('users/create', 'create')->name('admin.users.create')->middleware('permission:user-create');
        Route::post('users', 'store')->name('admin.users.store')->middleware('permission:user-create');
        Route::get('users/{id}/edit', 'edit')->name('admin.users.edit')->middleware('permission:user-edit');
        Route::put('users/{id}', 'update')->name('admin.users.update')->middleware('permission:user-edit');
        Route::delete('users/{id}', 'destroy')->name('admin.users.destroy')->middleware('permission:user-delete');
        Route::post('users/active/{id}', 'makeActive')->name('admin.users.active')->middleware('permission:user-edit');
    });


    Route::controller(DrugController::class)->group(function(){
        Route::get('drugs', 'index')->name('user.drugs.index')->middleware('permission:drug-list');
        Route::get('drugs/create', 'create')->name('user.drugs.create')->middleware('permission:drug-create');
        Route::post('drugs', 'store')->name('user.drugs.store')->middleware('permission:drug-create');
        Route::delete('drugs/{id}', 'destroy')->name('user.drugs.destroy')->middleware('permission:drug-delete');
        Route::post('drugs/update-quantity/{id}', 'updateQuantity')->name('user.drugs.updateQuantity')->middleware('permission:drug-create');
    });


    Route::controller(DrugRequestController::class)->group(function(){
        Route::get('drug-requests', 'index')->name('admin.drug-requests.index')->middleware('permission:drug-request-list');
        Route::get('drug-requests/{id}', 'update')->name('admin.drug-requests.update')->middleware('permission:drug-request-edit');
    });


    Route::controller(DrugShopController::class)->group(function(){
        Route::get('order/index', 'index')->name('admin.drug-shops.index')->middleware('permission:order-list');
        Route::post('order/order/{id}', 'order')->name('admin.drug-shops.order')->middleware('permission:order-place');
        Route::get('order/my-orders', 'myOrder')->name('admin.drug-shops.my-order')->middleware('permission:order-request-my-order');
        Route::delete('order/my-orders/cancel/{id}', 'myOrderCancel')->name('admin.drug-shops.my-order-cancel')->middleware('permission:order-request-my-order');
        Route::get('order/requests', 'requests')->name('admin.drug-shops.requests')->middleware('permission:order-request-list');
        Route::get('order/requests/approve/{id}', 'requestApprove')->name('admin.drug-shops.requests-approve')->middleware('permission:order-request-list');
    });


    Route::controller(UserAppoinmentController::class)->group(function(){
        Route::get('user/doctor/list', 'index')->name('user.doctor.index')->middleware('permission:doctor-list');
        Route::post('user/doctor/appointment/{id}', 'makeAppointment')->name('user.doctor.appointment')->middleware('permission:doctor-list');
        Route::get('user/doctor/appointments', 'appointments')->name('user.doctor.appointment.list')->middleware('permission:doctor-list');
    });


    Route::controller(DoctorAppointmentController::class)->group(function(){
        Route::get('doctor/appointments', 'index')->name('doctor.appointments.index')->middleware('permission:doctor-appointment-list');
        Route::post('doctor/appointments/{id}', 'store')->name('doctor.appointments.prescribe')->middleware('permission:doctor-appointment-list');
    });

});


