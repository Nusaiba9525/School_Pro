<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('school','school');
Route::view('logs','Admin.log');
Route::post('log','Admincontroller@log');
#Admin
Route::view('viewadminlogin','Admin.adminlogin');
Route::view('adminhome','admin.adminhome');

Route::view('change','Admin.changeuserpass');
Route::view('add','Admin.adddepartment');
#login
Route::post('adminlogin','Admincontroller@Login');
Route::get('home','Admincontroller@sessionget');
#adminlogout
Route::post('adminlogout','Admincontroller@Logout');
#add department
Route::post('add','Admincontroller@add');
#select
Route::get('dpt','Admincontroller@select');
#change username
Route::get('changeuser','Admincontroller@changeuser');
Route::post('changeusr','Admincontroller@userupd');
#change password
Route::get('changepass','Admincontroller@changepass');
Route::post('changepss','Admincontroller@passupd');
#staff
Route::view('staff','Staff.staff');
Route::view('viewstafflogin','Staff.stafflogin');
Route::view('registration','Staff.create');
Route::post('create','Staffcontroller@create');
#staff Login
Route::post('stafflogin','Staffcontroller@Login');
Route::get('get','Staffcontroller@sessionget');
#staff logout
Route::post('stafflogout','Staffcontroller@Logout');
#stud reg
Route::view('stud','Staff.students');
#dpt fn stud
Route::get('depart','Staffcontroller@select');
Route::post('reg','Staffcontroller@stud');
