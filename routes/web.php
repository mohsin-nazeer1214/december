<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiseaseController;

use App\Http\Controllers\SymptomsController;

use App\Http\Controllers\PatientController;

use App\Http\Controllers\DoctorController;


use App\Http\Controllers\DLoginController;



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


Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// diseases Crud


Route::get('/redirects',[App\Http\Controllers\HomeController::class,'index']);
Route::resource('diseases', DiseaseController::class);

//symptoms crud and Form

Route::get('/manage_sysmptoms', [SymptomsController::class, 'index']);
Route::post('/store-input-fields', [SymptomsController::class, 'store']);

//patient registration
Route::resource('patient_registration',PatientController::class);


// Route::get('country-state-city', [CountryStateCityController::class, 'index']);


Route::post('/getdisease', [PatientController::class, 'getdisease']);
Route::resource('patient_registration',PatientController::class);



//doctor registration

Route::resource('doctor_registration',DoctorController::class);

// Doctor Login


Route::get('/doctorlogin','DLoginController@show_login_form')->name('login');

 Route::post('/doctorlogin','DLoginController@process_login')->name('login');
  Route::post('/logout','DLoginController@logout')->name('logout');



