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

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/category', 'CategoryController@Category');
// Route::get('/category', 'CategoryController@store');
Route::get('/sub-category', 'SubcategoryController@SubCategory');
Route::get('/add-question', 'QuestionController@addQuestions');
Route::get('/add-quiz', 'QuizController@addQuiz');


