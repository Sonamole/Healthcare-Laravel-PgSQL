<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CaretakerController as AdminCaretakerController;
use App\Http\Controllers\Admin\DieticianController as AdminDieticianController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\HospitalController as AdminHospitalController;
use App\Http\Controllers\Admin\MedicalController as AdminMedicalController;
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

Route::get('/', [AdminAuthController::class, 'login'])->name('login');

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    Route::group(['prefix'=>'caretaker','as'=>'caretaker.'], function(){
    Route::get('/list', [AdminCaretakerController::class, 'list'])->name('list');
    Route::get('/store', [AdminCaretakerController::class, 'store'])->name('store');
    });

    Route::group(['prefix'=>'dietician','as'=>'dietician.'], function(){
    Route::get('/list', [AdminDieticianController::class, 'list'])->name('list');
    Route::get('/store', [AdminDieticianController::class, 'store'])->name('store');
    });


    Route::group(['prefix'=>'hospital','as'=>'hospital.'], function(){
    Route::get('/list', [AdminHospitalController::class, 'list'])->name('list');
    Route::get('/store', [AdminHospitalController::class, 'store'])->name('store');
    });


    Route::group(['prefix'=>'staff','as'=>'staff.'], function(){
    Route::get('/list', [AdminStaffController::class, 'list'])->name('list');
    Route::get('/store', [AdminStaffController::class, 'store'])->name('store');
    });

    Route::group(['prefix'=>'medical','as'=>'medical.'], function(){
    Route::get('/medicine', [AdminMedicalController::class, 'medicine'])->name('medicine');
    Route::get('/medicalreport', [AdminMedicalController::class, 'medicalreport'])->name('medicalreport');
    });

});

