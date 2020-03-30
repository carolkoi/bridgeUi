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

Route::resource('departments', 'DepartmentController');

Route::resource('tickets', 'TicketController')->except(['edit']);
Route::get('tickets/assign/{id}', 'TicketController@edit');

Route::prefix('all')->group(function () {
    Route::resource('tickets', 'TicketController');
    Route::resource('resolvedTickets', 'ResolvedTicketsController');
    Route::resource('closedTickets', 'ClosedTicketController');
});
Route::prefix('settings')->group(function () {
    Route::resource('users', 'UserController');
    Route::resource('issueTypes', 'IssueTypeController');
    Route::resource('categories', 'CategoryController');
});

Route::post('tickets/media', 'TicketController@storeMedia')
    ->name('tickets.storeMedia');
Route::post('tickets/resolve', 'TicketController@resolve')
    ->name('tickets.resolve');
Route::get('/hr-staff-list', function () {
    return UserResource::collection(User::where('ict_staff', false)->paginate(10));
});

Route::get('/tickets-parts', function () {
    return ItemResource::collection(Item::paginate(10));
});

Route::get('/maintenance-checklist', function () {
    return ChecklistResource::collection(Checklist::where('maintenance_schedule_id', 1)->paginate(10));
});

Route::get('/tickets-assets', function () {
    return AssetResource::collection(Asset::paginate(10));
});
Route::post('ict-staffs', 'UserController@updateIctStaff');
Route::post('/ticket-surrender/{id}', 'TicketController@surrender')->name('tickets.surrender');
Route::patch('/ticket/resolve/{id}', 'TicketController@resolve')->name('tickets.resolve');
Route::post('/issue-parts/{id}', 'TicketController@issueParts')->name('tickets.issue');



Route::resource('knowledgebaseArticles', 'KnowledgebaseArticleController');



Route::get('resolvedTickets/view/{id}', 'TicketController@view')->name('tickets.view');
Route::patch('resolvedTickets/close/{id}', 'TicketController@close')->name('tickets.close');



Route::resource('items', 'ItemController');

Route::resource('assets', 'AssetController');


Route::resource('maintenanceSchedules', 'MaintenanceScheduleController');

Route::resource('cycles', 'CycleController');

Route::resource('checklists', 'ChecklistController', [
    'only' => ['index', 'store', 'show', 'edit', 'update', 'destroy']
]);
Route::get('checklist/{id}', 'ChecklistController@create')->name('checklists.create');
//Route::post('checklist', 'ChecklistController@store')->name('checklists.store');
//Route::post('checklists', 'ChecklistController@index')->name('checklists.index');

Route::get('checklist-preview/{id}', 'ChecklistController@preview')->name('checklist.preview');


Route::resource('maintenanceRecords', 'MaintenanceRecordController');


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




Route::resource('serviceProviders', 'ServiceProvidersController');
