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

Route::group(['prefix' => 'data-akademik'], function () {
    Route::get('/data-akademik', function () {
        return view('data_akademik.data_akademik');
    })->name('data_akademik.data_akademik');
});
// Route::group(['prefix' => 'report'], function () {
//     Route::get('/report-keselarasan-horisontal', function () {
//         return view('report.report_keselarasan_horisontal');
//     })->name('report.keselarasan_horisontal');
// });
