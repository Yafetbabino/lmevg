<?php

use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Support\Facades\Route;

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
//
Route::get('setlocale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->middleware('setlocale')->name('locale.setting');

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' =>'[a-zA-z]{2}'],
    'middleware' => 'setlocale',
],

    function () {
    Route::get('/', function () {
        return view('index');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/edituser', [App\Http\Controllers\UserController::class, 'edituser'])->name('edituser');
    Route::put('/updateuser', [App\Http\Controllers\UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/download', [App\Http\Controllers\UserController::class, 'donwloadPDF'])->name('donwloadPDF');

    Route::get('/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
    Route::resource('admin', App\Http\Controllers\AdminController::class);




});

