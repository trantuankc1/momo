<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('checklogin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin-home');
    Route::get('/add-momo', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'create'])->name('add-momo');
    Route::post('/add-momo', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'store'])->name('store-add-momo');
    Route::get('/list-phone-momo', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'index'])->name('list-phone');
    Route::put('/update/{id}', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'update'])->name('update-phone');
    Route::get('/update/{id}', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'edit'])->name('update-phone');
    Route::delete('/delete-sdt-momo/{id}', [\App\Http\Controllers\Admin\PhoneMomoController::class, 'destroy'])->name('destroy-sdt-momo');

    Route::get('/chan-le', [\App\Http\Controllers\Admin\ChanLeController::class, 'index'])->name('chan-le');
    Route::delete('/chan-le-destroy/{id}', [\App\Http\Controllers\Admin\ChanLeController::class, 'destroy'])->name('chan-le-destroy');
    Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ChanLeController::class, 'edit'])->name('edit-chan-le');
    Route::put('/edit/{id}', [\App\Http\Controllers\Admin\ChanLeController::class, 'update'])->name('update-chan-le');
    Route::get('/add-chan-le', [\App\Http\Controllers\Admin\ChanLeController::class, 'create'])->name('add-chan-le');
    Route::post('/add-chan-le', [\App\Http\Controllers\Admin\ChanLeController::class, 'store'])->name('store-chan-le');


    Route::get('/chan-le-hai', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'index'])->name('chan-le-hai');
    Route::get('/chan-le-hai-edit/{id}', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'edit'])->name('edit-chan-le-hai');
    Route::put('/chan-le-hai-update/{id}', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'update'])->name('update-chan-le-hai');
    Route::delete('/destroy/{id}', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'destroy'])->name('destroy-chan-le-hai');
    Route::get('/add-chan-le-hai', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'create'])->name('add-chan-le-hai');
    Route::post('/add-chan-le-hai', [\App\Http\Controllers\Admin\ChanLeHaiController::class, 'store'])->name('store-chan-le-hai');


    Route::get('/tai-xiu', [\App\Http\Controllers\Admin\TaiXiuController::class, 'index'])->name('tai-xiu');
    Route::get('/add-tai-xiu', [\App\Http\Controllers\Admin\TaiXiuController::class, 'create'])->name('add-tai-xiu');
    Route::post('/add-tai-xiu', [\App\Http\Controllers\Admin\TaiXiuController::class, 'store'])->name('add-tai-xiu');
    Route::delete('/tai-xiu-delete/{id}', [\App\Http\Controllers\Admin\TaiXiuController::class, 'destroy'])->name('tai-xiu-destroy');
    Route::get('/edit-tai-xiu/{id}', [\App\Http\Controllers\Admin\TaiXiuController::class, 'edit'])->name('edit-tai-xiu');
    Route::put('/edit-tai-xiu/{id}', [\App\Http\Controllers\Admin\TaiXiuController::class, 'update'])->name('edit-tai-xiu');

    Route::get('/tai-xiu-hai', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'index'])->name('tai-xiu-hai');
    Route::get('/add-tai-xiu-hai', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'create'])->name('add-tai-xiu-hai');
    Route::post('/add-tai-xiu-hai', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'store'])->name('add-tai-xiu-hai');
    Route::delete('/tai-xiu-hai-delete/{id}', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'destroy'])->name('destroy-tai-xiu-hai');
    Route::get('tai-xiu-hai-edit/{id}', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'edit'])->name('edit-tai-xiu-hai');
    Route::put('tai-xiu-hai-edit/{id}', [\App\Http\Controllers\Admin\TaiXiuHaiController::class, 'update'])->name('update-tai-xiu-hai');

    Route::get('/mot-phan-ba', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'index'])->name('mot-phan-ba');
    Route::delete('/delete-mot-phan-ba/{id}', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'destroy'])->name('delete-mot-phan-ba');
    Route::get('/add-mot-phan-ba', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'create'])->name('add-mot-phan-ba');
    Route::post('/store-mot-phan-ba', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'store'])->name('store-mot-phan-ba');
    Route::get('/mot-phan-ba-edit/{id}', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'edit'])->name('mot-phan-ba-edit');
    Route::put('/update-mot-phan-ba/{id}', [\App\Http\Controllers\Admin\MotPhanBaController::class, 'update'])->name('update-mot-phan-ba');

    Route::get('/telegram', [\App\Http\Controllers\Admin\TelegramController::class, 'index'])->name('index.telegram');
    Route::delete('/telegram-delete/{id}', [\App\Http\Controllers\Admin\TelegramController::class, 'destroy'])->name('telegram-delete');
    Route::get('/add-telegram', [\App\Http\Controllers\Admin\TelegramController::class, 'create'])->name('telegram-create');
    Route::post('/store-telegram', [\App\Http\Controllers\Admin\TelegramController::class, 'store'])->name('store-telegram');

    Route::get('/pay-qr', [\App\Http\Controllers\Admin\PayQRController::class, 'index'])->name('pay-qr');
    Route::get('/add-qr', [\App\Http\Controllers\Admin\PayQRController::class, 'create'])->name('add-qr');
    Route::post('/store-add-qr', [\App\Http\Controllers\Admin\PayQRController::class, 'store'])->name('store-add-qr');
    Route::delete('/destroy-pay-qr/{id}', [\App\Http\Controllers\Admin\PayQRController::class, 'destroy'])->name('destroy-pay-qr');

    Route::get('/history-game', [\App\Http\Controllers\Admin\HistoryTransController::class, 'index'])->name('history.game');
    Route::put('/update-history-game/{id}', [\App\Http\Controllers\Admin\HistoryTransController::class, 'update'])->name('update.game');

});

Route::get('login-admin', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('admin-login', [\App\Http\Controllers\Auth\LoginController::class, 'process'])->name('process');
