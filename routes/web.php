<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SqlActionController;
use App\Http\Controllers\AuthController;

Route::get('/login/form', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('signup');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('index');
    })->name('dashbord');

    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('customer')->controller(SqlActionController::class)->group(function () {
        Route::get('/customer-list', 'customer_get_data')->name('customer-list');
        Route::get('/EditLoadCustomer/add_edit/{id}', 'EditLoadCustomer')->name('EditLoadCustomer');
        Route::get('/AddLoadCustomer', 'AddLoadCustomer_form')->name('AddLoadCustomer');
        Route::post('/AddLoadCustomer_query', 'AddLoadCustomer_query')->name('AddLoadCustomer_query');
        Route::post('/update_customer', 'update_customer')->name('update_customer');
    });

    Route::prefix('shipper')->controller(SqlActionController::class)->group(function () {
        Route::get('/shipper-list', 'shipper_get_data')->name('shipper-list');
        Route::get('/add_shipper', 'add_shipper_form')->name('add_shipper');
        Route::post('/add_shipper_query', 'add_shipper_query')->name('add_shipper_query');
        Route::get('/shipper/add_edit/{id}', 'edit_shipper')->name('edit_shipper');
        Route::post('/update_shipper', 'update_shipper')->name('update_shipper');
        Route::get('/get-shipper-location/{id}', 'getshipperLocation')->name('get_shipper_location');
    });

    Route::prefix('consignee')->controller(SqlActionController::class)->group(function () {
        Route::get('/consignee-list', 'consignee_get_data')->name('consignee-list');
        Route::get('/add_consignee', 'add_consignee_form')->name('add_consignee');
        Route::post('/add_consignee_query', 'add_consignee_query')->name('add_consignee_query');
        Route::get('/consign/add_edit/{id}', 'edit_consign')->name('edit_consign');
        Route::post('/update_consignee', 'update_consignee')->name('update_consignee');
        Route::get('/get-consignee-location/{id}', 'getconsigneeLocation')->name('get_consignee_location');
    });

    Route::prefix('mc-check')->controller(SqlActionController::class)->group(function () {
        Route::get('/mc-check-list', 'mc_get_data')->name('mc-check-list');
        Route::get('/add-mc-check', 'add_mc_form')->name('add-mc-check');
        Route::post('/add_mc_query', 'add_mc_query')->name('add_mc_query');
        Route::get('/edit_mc/add_edit/{id}', 'edit_mc')->name('edit_mc');
        Route::post('/update_mc', 'update_mc')->name('update_mc');
    });

    Route::prefix('carrier')->controller(SqlActionController::class)->group(function () {
        Route::get('/external_carrier', 'external_carrier')->name('external_carrier');
        Route::get('/add_carrier', 'add_carrier')->name('add_carrier');
        Route::post('/add_carrier_query', 'add_carrier_query')->name('add_carrier_query');
        Route::get('/edit_carrier/carrier_edit/{id}', 'edit_carrier')->name('edit_carrier');
        Route::post('/update_carrier_query', 'update_carrier_query')->name('update_carrier_query');
    });

    Route::prefix('load-creation')->controller(SqlActionController::class)->group(function () {
        Route::get('/', 'load_creation')->name('load-creation');
        Route::get('/add-load-creation', 'add_load_creation')->name('add-load-creation');
        Route::post('/add_load_creation_query', 'add_load_creation_query')->name('add_load_creation_query');
        Route::get('/edit_load_creation/edit_load/{id}', 'edit_load_creation')->name('edit_load_creation');
        Route::post('/update-load-status', 'updateStatus')->name('load_updateStatus');
        Route::post('/update_load_query', 'update_load_query')->name('update_load_query');
    });

    Route::get('/states', [SqlActionController::class, 'getStates'])->name('states.get');
});
