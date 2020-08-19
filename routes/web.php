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


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('companies', 'CompanyController');

Route::resource('projects', 'projectController');



Route::resource('mainMembers', 'MainMemberController');

Route::resource('mproperties', 'MpropertyController');

Route::resource('stdcodes', 'StdcodeController');

Route::resource('members', 'MemberController');

Route::resource('elements', 'ElementController');

Route::resource('steeltypes', 'SteeltypeController');

Route::resource('bbsformulas', 'BbsformulaController');



Route::resource('clients', 'ClientsController');

Route::get('/project/print/cover/{id}', ['as'=>'project.cover.print', 'uses'=>'ProjectController@printPDF']); //generate the final pdf

Route::get('/project/print/content/{id}', ['as'=>'project.content.print', 'uses'=>'ProjectController@printPDF2']); //generate the final pdf

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');

    Route::resource('users','UserController');

    //Route::resource('products','ProductController');

});
