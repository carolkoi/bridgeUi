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

use App\Models\Item;
use App\Models\Asset;
use App\Models\Checklist;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Item as ItemResource;
use App\Http\Resources\Asset as AssetResource;
use App\Http\Resources\Checklist as ChecklistResource;
use App\Models\User;

Route::get('/','Auth\LoginController@showLoginForm');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');
//Route::resource('transactions', 'TransactionsController');
Route::prefix('all')->group(function () {
    Route::resource('transactions', 'TransactionsController');
    Route::get('successful-transactions', 'SuccessTransactionsController@index')->name('success-transactions.index');
    Route::get('failed-transactions', 'FailedTransactionsController@index')->name('failed-transactions.index');
    Route::get('pending-transactions', 'PendingTransactionsController@index')->name('pending-transactions.index');
});
Route::prefix('charts')->group(function () {
    Route::get('failed-vs-successful', 'ChartsController@index')->name('charts.index');
});
Route::prefix('configurations')->group(function () {
//    Route::get('failed-vs-successful', 'ChartsController@index')->name('charts.index');
    Route::resource('globalSettings', 'GlobalSettingsController');
});
Route::prefix('all')->group(function () {
    Route::resource('companies', 'CompanyController');
});
Route::prefix('all')->group(function () {
    Route::resource('serviceProviders', 'ServiceProvidersController');

});






