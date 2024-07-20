<?php



use App\Http\Controllers\LoginController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KomputerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/customers',CustomerController::class);
Route::resource('/barang',BarangController::class);
Route::resource('/supplier',SupplierController::class);
Route::resource('/komputer',KomputerController::class);
Route::resource('/keluhan',KeluhanController::class);
Route::resource('/awal', AwalController::class);
Route::resource('/login',LoginController::class);
