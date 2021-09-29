<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PersonController;
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

Route::get('/',[PagesController::class, "index"])->name("index");
Route::get('/contact',[PagesController::class, "contact"])->name("contact");
Route::get('/quisommesnous',[PagesController::class, "whoWeAre"])->name("whoWeAre");
Route::get('/tarifs',[PagesController::class, "pricing"])->name("pricing");

// to show request table for persons
Route::get('/persons',[PersonController::class, "index"])->name("persons.index");

Route::get('/person/create',[PersonController::class, "create"])->name("persons.create");
Route::post('/person/create',[PersonController::class, "store"])->name("persons.store");

Route::get('/person/edit/{person}',[PersonController::class, "edit"])->name("persons.edit");
Route::post('/person/edit/{person}',[PersonController::class, "update"])->name("persons.update");

Route::get('/person/{person}',[PersonController::class, "show"])->name("persons.show");

Route::delete('/person/delete/{person}',[PersonController::class, "destroy"])->name("persons.destroy");
