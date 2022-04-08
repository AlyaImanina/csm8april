<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function (){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('index',[AdminController::class,'index'])->name('admin.index');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('reglistmp',[AdminController::class,'reglistmp'])->name('admin.reglistmp');
    Route::get('reglistsme',[AdminController::class,'reglistsme'])->name('admin.reglistsme');
    Route::get('regcompanymp',[AdminController::class,'regcompanymp'])->name('admin.regcompanymp');
    Route::get('pgpks',[AdminController::class,'pgpks'])->name('admin.pgpks');
    Route::get('awarness',[AdminController::class,'awarness'])->name('admin.awarness');
    Route::get('cha',[AdminController::class,'cha'])->name('admin.cha');
    Route::get('intervention',[AdminController::class,'intervention'])->name('admin.intervention');
    Route::get('isgric',[AdminController::class,'isgric'])->name('admin.isgric');
    Route::get('training',[AdminController::class,'training'])->name('admin.training');
    Route::get('vapt',[AdminController::class,'vapt'])->name('admin.vapt');
    Route::get('regnewevent',[AdminController::class,'regnewevent'])->name('admin.regnewevent');
    Route::get('regbookdateisgric',[AdminController::class,'regbookdateisgric'])->name('admin.regbookdateisgric');


});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});
