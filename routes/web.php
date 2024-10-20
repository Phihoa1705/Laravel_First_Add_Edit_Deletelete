<?php

use App\Http\Controllers\LienHeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SinhVienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gioi-thieu-ban-than',[PersonController::class,'index']);
Route::get('/lien-he',[LienHeController::class,'index']);

Route::get('/danh-sach-sv',[SinhVienController::class,'index'])->name('sinhvien.index');

Route::get('/danh-sach-sv/them-sv',[SinhVienController::class,'create'])->name('sinhvien.create');

// Route::post('/danh-sach-sv/save',[SinhVienController::class,'save'])->name('sinhvien.save'); Đặt tên cho route
Route::post('/danh-sach-sv/save',[SinhVienController::class,'save'])->name('sinhvien.save');

Route::post('/danh-sach-sv/xoa-sv',[SinhVienController::class,'destroy'])->name('sinhvien.delete'); 

Route::get('/danh-sach-sv/sua-sv',[SinhVienController::class,'edit'])->name('sinhvien.edit');

Route::post('/danh-sach-sv/update',[SinhVienController::class,'update'])->name('sinhvien.update');