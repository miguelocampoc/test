<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;
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

Route::get('/', 'HomeController@index');

Route::get('/send', function(){
    Mail::to('miguelocampoc@gmail.com')->send(new TestMail());
    return 'mail sent';
});

Route::get('/dashboard','dashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
Route::resource('/expense_reports', 'ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');
