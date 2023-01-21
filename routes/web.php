<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use Symfony\Component\Routing\RequestContext;
use App\Http\Controllers\CarStickerController;

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

//Show Request Form
Route::get('/', [RequestController::class, 'index']);

//Save Request
Route::post('/submit', [RequestController::class, 'save']);

//Show Requests
Route::get('/marketing', [RequestController::class, 'show']);

//Show Appointment Page
Route::get('/marketing/{employee}/appointment', [RequestController::class, 'appointment']);

//Save Date
Route::put('/marketing/{employee}/appointment/save', [RequestController::class, 'saveAppointment']);

//Confirm Appointment
Route::get('/marketing/{employee}/appointment/confirm', [RequestController::class, 'confirmAppointment']);

//Show all currently active Requests
Route::get('/sekretariat', [CarStickerController::class, 'show']);

//Confirm handing over of voucher
Route::get('/sekretariat/{employee}/confirm', [CarStickerController::class, 'confirm']);

//Show Voucher Selection Page
Route::get('/vouchers', [CarStickerController::class, 'voucherselection']);

//Show Voucher for each Employee
Route::get('/vouchers/{employee}/change', [CarStickerController::class, 'change']);

//Save Change Voucher
Route::put('/vouchers/{employee}/change/save', [CarStickerController::class, 'save']);

