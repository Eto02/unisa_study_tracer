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
    return view('home');
})->name('home');;

Route::group(['prefix' => 'data'], function () {
    Route::get('/data-tracer', function () {
        return view('data.data_tracer');
    })->name('data.data_tracer');

    Route::get('/pusat-karir', function () {
        return view('data.pusat_karir');
    })->name('data.pusat_karir');

    Route::get('/upload-data-tracer', function () {
        return view('data.upload_data_tracer');
    })->name('data.upload_data_tracer');
});
Route::group(['prefix' => 'report'], function () {
    Route::get('/report-keselarasan-horisontal', function () {
        return view('report.report_keselarasan_horisontal');
    })->name('report.keselarasan_horisontal');
});
