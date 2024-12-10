<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//test session
Route::get('/nvs-session/get',[NvsSessionController::class,'nvsGetSessionData'])->name('nvssession.get');
Route::get('/nvs-session/set',[NvsSessionController::class,'nvsStoreSessionData'])->name('nvssession.set');
Route::get('/nvs-session/del',[NvsSessionController::class,'nvsDeleteSessionData'])->name('nvssession.del');
//Account
Route::get('/nvs-login',[NvsAccountController::class,'nvslogin'])->name('nvsaccount.nvslogin');
Route::get('/nvs-logout',[NvsAccountController::class,'nvslogout'])->name('nvsaccount.nvslogout');
Route::post('/nvs-login',[NvsAccountController::class,'nvsLoginSubmit'])->name('nvsaccount.nvsLoginSubmit');