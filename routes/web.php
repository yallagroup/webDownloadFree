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

Route::get('/', 'Frontend\PagesController@homepage')->name('home');

Route::get('/info/{page}', 'Frontend\PagesController@show')->name('page.show');
Route::post('/info/contact', 'Frontend\PagesController@contact')->name('page.contact');
Route::get('/category/{id}/{slug}', 'Frontend\CategoriesController@show')->name('category.show');
Route::get('/program/{id}/{slug}', 'Frontend\ProgramsController@show')->name('program.show');


//=> admin routes
Route::prefix('admin')->middleware(['auth'])->namespace('Backend')->group(function () {

    //=> categories routes
    Route::prefix('category')->group(function () {
        Route::get('index', 'CategoriesController@index')->name('categories.index');
        Route::get('create', 'CategoriesController@create')->name('category.create');
        Route::post('store', 'CategoriesController@store')->name('category.store');
        Route::get('{id}/edit', 'CategoriesController@edit')->name('category.edit');
        Route::post('{id}/update', 'CategoriesController@update')->name('category.update');
        Route::get('{id}/delete', 'CategoriesController@destroy')->name('category.destroy');
    });

    //=> programs routes
    Route::prefix('program')->group(function () {
        Route::get('index', 'ProgramsController@index')->name('programs.index');
        Route::get('create', 'ProgramsController@create')->name('program.create');
        Route::post('store', 'ProgramsController@store')->name('program.store');
        Route::get('{id}/edit', 'ProgramsController@edit')->name('program.edit');
        Route::post('{id}/update', 'ProgramsController@update')->name('program.update');
        Route::get('{id}/delete', 'ProgramsController@destroy')->name('program.destroy');
    });

});
