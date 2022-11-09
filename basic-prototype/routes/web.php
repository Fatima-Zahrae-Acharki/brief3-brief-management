<?php

use App\Http\Controllers\apprenticesController;
use App\Http\Controllers\briefController;
use App\Http\Controllers\crudController;
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
    return view('welcome');
});



Route::get('/test', function () {
    return view('test');
});

Route::post('insert', [crudController::class, 'insert'])->name('insert');

Route::get('/test', [crudController::class, 'show']);
Route::get('delete/{id}',[crudController::class, 'deletePromo']);


Route::get('edit/{id}', [crudController::class, 'edit_promotion']); 
Route::post('update/{id}', [crudController::class, 'update']);

// Route::get("delete/{id}", [crudController::class, 'delete']);
Route::get('delete/{id}', [crudController::class, 'delete']);
// Route::delete('delete/{id}',array('test' => 'crudController@destroy', 'as' => 'test'));
Route::get('search', [crudController::class, 'search']);
Route::get('search/{searchResult}', [crudController::class, 'search']);


// ----------------------------------end of promotions-------------------






//-----------------------------------start of apprentices --------------------------------

Route::get('addStudent/{id}',[apprenticesController::class, 'addStudent']);
Route::post('insert_student',[apprenticesController::class, 'insert_student']);
Route::get('edt_S/{id}',[apprenticesController::class, 'edt_S']);
Route::post('updateS/{id}',[apprenticesController::class, 'updateS']);
Route::get('edit/delete/{id}',[apprenticesController::class, 'delete']);







// ----------------------------------start of briefs-------------------

Route::get('addBrief', [briefController::class, 'viewBrief']);
Route::post('addBrief', [briefController::class, 'addBrief']);
Route::get('showBrief', [briefController::class, 'showBrief']);


// ----------------------------------end of brief-------------------
