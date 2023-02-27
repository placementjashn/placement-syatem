<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
// Open Student Dashboard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';

//open company dashboard
Route::get('/company/dashboard', /* function () {
    return view('company.dashboard'); */[EmployeeController::class,'companyindex']
)->middleware(['auth:company', 'verified'])->name('company.dashboard');
require __DIR__.'/companyauth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Company Dashboard
//Route::get('/company/dashboard',[CompanyDashboard::class,'companyindex']);
Route::get('/addemp',[EmployeeController::class,'empadd']);
Route::post('/addemp',[EmployeeController::class,'empdata']);
//::get('/loginemp',[EmployeeController::class,'emplogin']);
//Route::post('/loginemp',[EmployeeController::class,'verifylogin']);
