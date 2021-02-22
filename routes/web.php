<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/menu')->name('menu.')->group(function(){
    Route::prefix('/admin')->name('admin.')->group(function(){
        Route::resource('siswa','SiswaController');
        Route::resource('guru','GuruController');
        Route::get('user/create','UserController@create')->name('user.create');
        Route::post('user/store','UserController@store')->name('user.store');
        Route::resource('rewardPunishment','RewardPunishmentController');
        Route::resource('kode','KodeController');
        Route::resource('skor','SkorController');
    });
    Route::prefix('/guru')->name('guru.')->middleware('auth')->group(function(){
        Route::get('/profil','GuruController@profil')->name('profil');
        Route::get('/tugasBK','GuruController@tugasBK')->name('tugasBK');
        Route::post('/tugasBKStore','GuruController@tugasBKStore')->name('tugasBKStore');
        Route::get('/rewardPunishment','GuruController@rewardPunishment')->name('rewardPunishment');
        Route::post('/rewardPunishmentStore','GuruController@rewardPunishmentStore')->name('rewardPunishmentStore');
        Route::get('/rapotSiswa','RapotController@rapotSiswa')->name('rapotSiswa');
        Route::post('/rapotSiswaStore','RapotController@rapotSiswaStore')->name('rapotSiswaStore');

        Route::prefix('/ajax')->name('ajax.')->middleware('auth')->group(function(){
            Route::get('/tipeGet/{id}','AjaxController@tipeGet');
            Route::get('/kodeGet/{id}','AjaxController@kodeGet');
            Route::get('/skorGet/{id}','AjaxController@skorGet');
        });
    });
    Route::prefix('/siswa')->name('siswa.')->middleware('auth')->group(function(){
        Route::get('/index','SiswaController@index')->name('index');
        Route::get('/jadwalSholat','SiswaController@jadwalSholat')->name('jadwalSholat');
        Route::post('/sholatStore','SholatController@store')->name('sholatStore');
        Route::get('/rewardPunishment','SiswaController@rewardPunishment')->name('rewardPunishment');
        Route::get('/rapot','SiswaController@rapot')->name('rapot');
        Route::get('/profil','SiswaController@profil')->name('profil');
        Route::get('/tugasBK','SiswaController@tugasBK')->name('tugasBK');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
