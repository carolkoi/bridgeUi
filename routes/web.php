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

use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

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

Route::resource('tickets', 'TicketController');

Route::resource('issueTypes', 'IssueTypeController');
Route::post('tickets/media', 'TicketController@storeMedia')
    ->name('tickets.storeMedia');
Route::post('tickets/resolve', 'TicketController@resolve')
    ->name('tickets.resolve');
Route::get('/hr-staff-list', function () {
    return UserResource::collection(User::where('ict_staff', false)->paginate(10));
});
Route::post('ict-staffs', 'UserController@updateIctStaff');
Route::post('/ticket-surrender/{id}', 'TicketController@surrender')->name('tickets.surrender');
Route::patch('/ticket/resolve/{id}', 'TicketController@resolve')->name('tickets.resolve');


Route::resource('categories', 'CategoryController');

Route::resource('knowledgebaseArticles', 'KnowledgebaseArticleController');


Route::resource('resolvedTickets', 'ResolvedTicketsController');
Route::get('resolvedTickets/view/{id}', 'TicketController@view')->name('tickets.view');
Route::patch('resolvedTickets/close/{id}', 'TicketController@view')->name('tickets.close');

Route::resource('closedTickets', 'ClosedTicketController');
