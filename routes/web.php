<?php
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','DashboardController@index');
Route::post('/tambah/data/promo','PromoController@addpromo');
Route::get('/dapatkan-promo/terbaik/&/cicilan/terendah/read.honda/mobil/pilihanmu','PromoController@promo');
Route::get('/honda-kumala/karawang/{id}/details-promo','PromoController@detail_promo');
Route::get('/honda-kumala/karawang/{id}/details','DashboardController@details');
Route::get('/honda-kumala/karawang/pricelist','DashboardController@pricelist');
Route::get('/honda-kumala/karawang/simulasi-kredit','SimulasiController@simulasi');
Route::post('/data/pelanggan/honda','DashboardController@tambah_pengunjung');

//----------------admin
Route::get('/admin-honda/register','AdminController@register');
Route::post('/admin-honda/register/tambah','AdminController@add_register');
Route::post('/admin-honda/login/berhasil','AdminController@login_post');
Route::get('/admin-honda/login','AdminController@loginku')->name('login');

Route::group(['middleware' => 'auth'],function(){
//login register
Route::get('/admin-honda','AdminController@dashboard');
Route::get('/admin-honda/logout','AdminController@logout');
Route::get('/admin-honda/edit/profile/{id}','AdminController@profile');
Route::post('/admin-honda/update/profile/{id}','AdminController@profile_update');
// pengunjung
Route::get('/admin-honda/pengunjung/promo','ApengunjungController@pengunjung_promo');
Route::get('/admin-honda/pengunjung/promo/{id}/hapus','ApengunjungController@hapus_promo');
Route::get('/admin-honda/pengunjung','ApengunjungController@pengunjung');
Route::get('/admin-honda/pengunjung/{id}/hapus','ApengunjungController@hapus_pengunjung');
//dokumentasi
Route::get('/admin-honda/dokumentasi','AdokumentasiController@dokumentasi');
Route::post('/admin-honda/dokumentasi/tambah','AdokumentasiController@tambah');
Route::get('/admin-honda/dokumentasi/{id}/hapus','AdokumentasiController@hapus');
Route::get('/admin-honda/dokumentasi/{id}/edit','AdokumentasiController@edit');
Route::post('/admin-honda/dokumentasi/{id}/update','AdokumentasiController@update');
//gambar
Route::get('/admin-honda/gambar','AdokumentasiController@gambar');
Route::get('/admin-honda/gambar/{id}/edit','AdokumentasiController@edit_gambar');
Route::post('/admin-honda/gambar/{id}/update','AdokumentasiController@update_gambar');
Route::get('/admin-honda/gambar/{id}/hapus','AdokumentasiController@hapus_gambar');
//Populer
Route::get('/admin-honda/populer/{id}/edit','AdokumentasiController@edit_populer');
Route::post('/admin-honda/populer/{id}/update','AdokumentasiController@update_populer');
Route::get('/admin-honda/populer/{id}/hapus','AdokumentasiController@hapus_populer');
//merk mobil
Route::get('/admin-honda/penjualan/add','ApenjualanController@tambah_mobil');
Route::get('/admin-honda/penjualan','ApenjualanController@mobil');
Route::post('/admin-honda/promosi/tambah','ApenjualanController@addmobil');
Route::get('/admin-honda/promosi/{id}/hapus','ApenjualanController@hapus_mobil');
Route::get('/admin-honda/promosi/{id}/edit','ApenjualanController@edit_mobil');
Route::post('/admin-honda/promosi/{id}/update','ApenjualanController@update_mobil');
Route::get('/admin-honda/populer','ApenjualanController@populer');
//Type Mobil
Route::get('/admin-honda/pricelist','AtypeController@type');
Route::get('/admin-honda/type/{id}/mobil','AtypeController@add_type');
Route::post('/admin-honda/price-list/{id}/tambah','AtypeController@tambah_type');
Route::get('/admin-honda/price-list/{id}/hapus','AtypeController@hapus_type');
Route::get('/admin-honda/price-list/{id}/edit','AtypeController@edit_type');
Route::post('/admin-honda/price-list/{id}/update','AtypeController@update_type');
//promo Mobil
Route::get('/admin-honda/promo/{id}/mobil','AtypeController@add_promo');
Route::post('/admin-honda/tambah/promo/{id}/mobil','AtypeController@tambah_promo');
Route::get('/admin-honda/promo','AtypeController@read_promo');
Route::get('/admin-honda/promo/{id}/mobil/hapus','AtypeController@hapus_promo');
Route::get('/admin-honda/promo/{id}/mobil/edit','AtypeController@edit_promo');
Route::post('/admin-honda/promo/{id}/mobil/update','AtypeController@update_promo');
//Simulasi Kredit
Route::get('/admin-honda/simulasi/kredit','AsimulasiController@simulasi_kredit');

});