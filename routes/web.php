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
Auth::routes();

Route::group(['middleware' => ['auth', 'rule']], function () {
    Route::get('/dashboard', ['uses' => 'Dash\DashboardController@show', 'as' => 'show_dashboard']);
    Route::get('/reports', ['uses' => 'Report\ReportController@show', 'as' => 'show_report']);
    Route::get('/configuration', ['uses' => 'Conf\ConfigurationController@show', 'as' => 'show_configuration']);

    Route::get('/dashboard/add', ['uses' => 'Dash\DashboardController@createUserShow', 'as' => 'create_user_show']);
    Route::post('/dashboard/add', ['uses' => 'Dash\DashboardController@createUser', 'as' => 'create_user']);
});
