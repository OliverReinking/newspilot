<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\DashboardEmployeeController;

// --------
// Homepage
// --------
// Startseite
Route::get('/', [HomeController::class, 'home_index'])->name('home');
// Über uns
Route::get('/about', [HomeController::class, 'home_about'])->name('about');
// Unsere Mission
Route::get('/mission', [HomeController::class, 'home_mission'])->name('mission');
// Kontaktformular
Route::get('/contact', [HomeController::class, 'home_contact'])->name('contact');
// Impressum
Route::get('/imprint', [HomeController::class, 'home_imprint'])->name('imprint');
// Datenschutzerklärung
Route::get('/privacy', [HomeController::class, 'home_privacy'])->name('privacy');

// Bewerbungsformular
Route::get('/job_application', [HomeController::class, 'home_job_application'])->name('job_application');
// Bewerbungsformular Send
Route::post('/job_application/send', [HomeController::class, 'home_job_application_send'])
    ->name('home.job_application.send');

// Anwender ist kein Administrator
Route::get(
    '/user_is_no_admin',
    [HomeController::class, 'user_is_no_admin']
)->name('user_is_no_admin');
// Anwender ist kein Mitarbeiter
Route::get('/user_is_no_employee', [HomeController::class, 'user_is_no_employee'])->name('user_is_no_employee');
// Anwender ist kein Kunde
Route::get('/user_is_no_customer', [HomeController::class, 'user_is_no_customer'])->name('user_is_no_customer');

// Anwendung konnte nicht gefunden werden
Route::get('/no_application_found', [HomeController::class, 'no_application_found'])
    ->name('no_application_found');

// ------------------------------
// Routen für angemeldete Anwender
// -------------------------------
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // =================
    // APPLICATIONSWITCH
    // =================
    Route::get('/applicationswitch', [ApplicationController::class, 'index'])->name('applicationswitch');

    // =================
    // APPLICATION ADMIN
    // =================
    Route::middleware(['is_admin'])->group(function () {
        // Dashboard
        Route::get(
            '/admin/dashboard',
            [DashboardAdminController::class, 'admin_index']
        )->name('admin.dashboard');
        // =======
        // Profile
        // =======
        Route::get('/admin/profile', [DashboardAdminController::class, 'admin_profile'])
            ->name('admin.profile');
    });

    // ====================
    // APPLICATION EMPLOYEE
    // ====================
    Route::middleware(['is_employee'])->group(function () {
        // Dashboard
        Route::get('/employee/dashboard', [DashboardEmployeeController::class, 'employee_index'])
            ->name('employee.dashboard');
    });

    // ====================
    // APPLICATION CUSTOMER
    // ====================
    Route::middleware(['is_customer'])->group(function () {
        // Dashboard
        Route::get('/customer/dashboard', [DashboardCustomerController::class, 'customer_index'])
            ->name('customer.dashboard');
    });
});

// --------------
// Fallback-Route
// --------------
Route::fallback(function () {
    return Inertia::render('Application/Homepage/NoPageFound');
});