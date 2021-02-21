<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Playground\MongoPlayground;
use App\Http\Controllers\Concepts\ChatBase;
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


// ANCHOR
// database check / dependency test's
Route::get('/mongo_dependencies_check', [ChatBase::class, 'store']);
// dev

// Route::resource('books','chatAppConcersationTestController');

// Route::resource('student',StudentController::class);
