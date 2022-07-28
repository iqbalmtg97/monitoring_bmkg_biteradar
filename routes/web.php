<?php

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
    return view('auth.logins');
});

Auth::routes();

// Route::get('/profile', 'AuthController@profile');
Route::get('/home', 'AuthController@profile');
Route::get('/br_edrp9comp', 'HomeController@index1');
Route::get('/br_edrp9', 'HomeController@index2');
Route::get('/br_ddcbite', 'HomeController@index3');
Route::get('/ddcbite/export', 'HomeController@export_ddcbite');
Route::get('/edrp9/export', 'HomeController@export_edrp9');
Route::get('/ddcbite/export', 'HomeController@export_ddcbite');
Route::get('/edrp9comp/export', 'HomeController@export_edrp9comp');


//Notifikasi
Route::get('/notifikasi', 'LupapasswordController@index');
Route::post('/notifikasi/post', 'LupapasswordController@store');

//Lupa password
Route::get('/lupa_password', 'LupapasswordController@lupa');
// Route::post('/lupa_password', 'LupapasswordController@password');

//Route Group//

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
// Admin

//Profile
// Route::get('/profile', 'ProfileController@index');
Route::get('/profile', 'AuthController@profile');
Route::get('/getdata/{id}', 'AuthController@edit');
Route::post('/updateprofile', 'AuthController@update');
Route::get('/changePassword','AuthController@showChangePasswordForm');
Route::post('/changePassword','AuthController@changePassword')->name('changePassword');

//Pengguna
Route::get('/pengguna', 'PenggunaController@index');
Route::post('/pengguna/inputdatapengguna', 'PenggunaController@store');
Route::get('/datapengguna/hapus/{id}', 'PenggunaController@destroy');
Route::post('/updatepengguna', 'PenggunaController@update');
Route::get('/getdatapengguna/{id}', 'PenggunaController@edit');



//Laporan Perbaikan
Route::get('/lap_perbaikan_adm', 'LaporanperbaikanController@index');
Route::post('/lap_perbaikan_adm/inputdata', 'LaporanperbaikanController@store');
Route::get('/lapper/hapus/{id}', 'LaporanperbaikanController@destroy');

//Laporan Pemeliharaan
Route::get('/lap_pemeliharaan_adm', 'LaporanpemeliharaanController@index');




});

Route::group(['middleware' => ['auth', 'checkRole:admin,pengguna']], function () {
// Admin dan Pengguna


//Profile
// Route::get('/profile', 'ProfileController@index');
Route::get('/profile', 'AuthController@profile');
Route::get('/getdata/{id}', 'AuthController@edit');
Route::post('/updateprofile', 'AuthController@update');
Route::get('/changePassword','AuthController@showChangePasswordForm');
Route::post('/changePassword','AuthController@changePassword')->name('changePassword');

//Laporan Perbaikan
Route::get('/lap_perbaikan_adm', 'LaporanperbaikanController@index');
Route::post('/lap_perbaikan_adm/inputdata', 'LaporanperbaikanController@store');
Route::get('/lap_perbaikan_adm/hapus/{id}', 'LaporanperbaikanController@destroy');


//Laporan Pemeliharaan
Route::get('/lap_pemeliharaan_adm', 'LaporanpemeliharaanController@index');
Route::get('/getdatalapem/{id}', 'LaporanpemeliharaanController@getdatalapem');
Route::get('/lapem/export', 'LaporanpemeliharaanController@export');
//update
Route::post('/lap_pemeliharaan/update', 'LaporanpemeliharaanController@update');
Route::post('/lap_pemeliharaan/update1', 'LaporanpemeliharaanController@update1');
Route::post('/lap_pemeliharaan/update2', 'LaporanpemeliharaanController@update2');
Route::post('/lap_pemeliharaan/update3', 'LaporanpemeliharaanController@update3');
Route::post('/lap_pemeliharaan/update4', 'LaporanpemeliharaanController@update4');
Route::post('/lap_pemeliharaan/update5', 'LaporanpemeliharaanController@update5');
Route::post('/lap_pemeliharaan/update6', 'LaporanpemeliharaanController@update6');
Route::post('/lap_pemeliharaan/update7', 'LaporanpemeliharaanController@update7');
Route::post('/lap_pemeliharaan/update8', 'LaporanpemeliharaanController@update8');
Route::post('/lap_pemeliharaan/update9', 'LaporanpemeliharaanController@update9');
Route::post('/lap_pemeliharaan/update10', 'LaporanpemeliharaanController@update10');
Route::post('/lap_pemeliharaan/update11', 'LaporanpemeliharaanController@update11');
Route::post('/lap_pemeliharaan/update12', 'LaporanpemeliharaanController@update12');
Route::post('/lap_pemeliharaan/update13', 'LaporanpemeliharaanController@update13');
Route::post('/lap_pemeliharaan/update14', 'LaporanpemeliharaanController@update14');
Route::post('/lap_pemeliharaan/update15', 'LaporanpemeliharaanController@update15');
Route::post('/lap_pemeliharaan/update16', 'LaporanpemeliharaanController@update16');
Route::post('/lap_pemeliharaan/update17', 'LaporanpemeliharaanController@update17');
Route::post('/lap_pemeliharaan/update18', 'LaporanpemeliharaanController@update18');
Route::post('/lap_pemeliharaan/update19', 'LaporanpemeliharaanController@update19');
Route::post('/lap_pemeliharaan/update20', 'LaporanpemeliharaanController@update20');
Route::post('/lap_pemeliharaan/update21', 'LaporanpemeliharaanController@update21');
Route::post('/lap_pemeliharaan/update22', 'LaporanpemeliharaanController@update22');
Route::post('/lap_pemeliharaan/update23', 'LaporanpemeliharaanController@update23');
Route::post('/lap_pemeliharaan/update24', 'LaporanpemeliharaanController@update24');
Route::post('/lap_pemeliharaan/update25', 'LaporanpemeliharaanController@update25');
Route::post('/lap_pemeliharaan/update26', 'LaporanpemeliharaanController@update26');
Route::post('/lap_pemeliharaan/update27', 'LaporanpemeliharaanController@update27');
Route::post('/lap_pemeliharaan/update28', 'LaporanpemeliharaanController@update28');
Route::post('/lap_pemeliharaan/update29', 'LaporanpemeliharaanController@update29');
Route::post('/lap_pemeliharaan/update30', 'LaporanpemeliharaanController@update30');
Route::post('/lap_pemeliharaan/update31', 'LaporanpemeliharaanController@update31');
Route::post('/lap_pemeliharaan/update32', 'LaporanpemeliharaanController@update32');
Route::post('/lap_pemeliharaan/update33', 'LaporanpemeliharaanController@update33');
Route::post('/lap_pemeliharaan/update34', 'LaporanpemeliharaanController@update34');
Route::post('/lap_pemeliharaan/update35', 'LaporanpemeliharaanController@update35');
Route::post('/lap_pemeliharaan/update36', 'LaporanpemeliharaanController@update36');
Route::post('/lap_pemeliharaan/update37', 'LaporanpemeliharaanController@update37');
Route::post('/lap_pemeliharaan/update38', 'LaporanpemeliharaanController@update38');
Route::post('/lap_pemeliharaan/update39', 'LaporanpemeliharaanController@update39');
Route::post('/lap_pemeliharaan/update40', 'LaporanpemeliharaanController@update40');
Route::post('/lap_pemeliharaan/update41', 'LaporanpemeliharaanController@update41');
Route::post('/lap_pemeliharaan/update42', 'LaporanpemeliharaanController@update42');
Route::post('/lap_pemeliharaan/update43', 'LaporanpemeliharaanController@update43');
Route::post('/lap_pemeliharaan/update44', 'LaporanpemeliharaanController@update44');
Route::post('/lap_pemeliharaan/update45', 'LaporanpemeliharaanController@update45');
Route::post('/lap_pemeliharaan/update46', 'LaporanpemeliharaanController@update46');
Route::post('/lap_pemeliharaan/update47', 'LaporanpemeliharaanController@update47');
Route::post('/lap_pemeliharaan/update48', 'LaporanpemeliharaanController@update48');
Route::post('/lap_pemeliharaan/update49', 'LaporanpemeliharaanController@update49');


});




//Referensi//

// Data Pasien
// Route::get('/data_pasien', 'DatapasienController@index')->name('data_pasien');
// Route::post('/datapasien/inputdatapasien', 'DatapasienController@store');
// Route::get('/getdatapasien/{id}', 'DatapasienController@getdatapasien');
// Route::post('/datapasien/updatedatapasien', 'DatapasienController@update');
// Route::get('/datapasien/hapus/{id}', 'DatapasienController@destroy');
