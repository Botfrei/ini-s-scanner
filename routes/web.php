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

Route::get('/', function () {
    return view('welcome');
});

// Scanner routes
Route::group(['prefix' => 'scanner'], function() {

    // <app_url>/scanner/start
    Route::post('/start', ['uses' => 'ScannerController@start',   'as' => 'start.scanner']);

    // <app_url>/scanner/update-blacklists/{type} -> {type} is optional
    Route::get('/update-blacklists/{type?}', ['uses' => 'ScannerController@updateBlacklists',   'as' => 'updateBlacklists.scanner']);

});

// Audit routes
Route::group(['prefix' => 'audit'], function() {

    // <app_url>/audit/today/{type} -> {type} is optional
    Route::get('/today/{type?}', ['uses' => 'AuditController@today',   'as' => 'today.logs']);

});

