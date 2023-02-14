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


Route::get('/', 'LandingController@index')->name('index');
Route::get('/profile', 'LandingController@profil')->name('profile');
Route::get('/beritas', 'LandingController@beritas')->name('beritas');
Route::get('/contact', 'LandingController@contact')->name('contact');
Route::get('/galleri', 'LandingController@gallery')->name('galleri');
Route::get('/testimonis', 'LandingController@testimonis')->name('testimonis');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/team', 'TeamController@index')->name('team');
Route::get('/team/create', 'TeamController@create')->name('create');
Route::post('/team', 'TeamController@store')->name('store');
Route::get('/edit/{id_team}', 'TeamController@edit')->name('edit');
Route::post('/update/{id_team}', 'TeamController@update')->name('update');
Route::get('/delete/{id_team}', 'TeamController@destroy')->name('delete');

Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/gallery/create', 'GalleryController@create')->name('create');
Route::post('/gallery', 'GalleryController@store')->name('store');
Route::get('/gallery/edit/{id_galleri}', 'GalleryController@edit')->name('edit');
Route::post('/gallery/update/{id_galleri}', 'GalleryController@update')->name('update');
Route::get('/gallery/delete/{id_galleri}', 'GalleryController@destroy')->name('delete');

Route::get('/berita', 'BeritaController@index')->name('berita');
Route::get('/berita/create', 'BeritaController@create')->name('create');
Route::post('/berita', 'BeritaController@store')->name('store');
Route::get('/berita/edit/{id_berita}', 'BeritaController@edit')->name('edit');
Route::post('/berita/update/{id_berita}', 'BeritaController@update')->name('update');
Route::get('/berita/delete/{id_berita}', 'BeritaController@destroy')->name('delete');

Route::get('/mitra', 'MitraController@index')->name('mitra');
Route::get('/mitra/create', 'MitraController@create')->name('create');
Route::post('/mitra', 'MitraController@store')->name('store');
Route::get('/mitra/edit/{id_mitra}', 'MitraController@edit')->name('edit');
Route::post('/mitra/update/{id_mitra}', 'MitraController@update')->name('update');
Route::get('/mitra/delete/{id_mitra}', 'MitraController@destroy')->name('delete');

Route::get('/testimoni', 'TestimoniController@index')->name('testimoni');
Route::get('/testimoni/create', 'TestimoniController@create')->name('create');
Route::post('/testimoni', 'TestimoniController@store')->name('store');
Route::get('/testimoni/edit/{id_testimoni}', 'TestimoniController@edit')->name('edit');
Route::post('/testimoni/update/{id_testimoni}', 'TestimoniController@update')->name('update');
Route::get('/testimoni/delete/{id_testimoni}', 'TestimoniController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

