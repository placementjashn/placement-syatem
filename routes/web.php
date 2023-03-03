<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyDashboard;

use App\Http\Controllers\StudentController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/company/dashboard', function () {
    return view('company.dashboard');
})->middleware(['auth:company', 'verified'])->name('company.dashboard');
require __DIR__.'/companyauth.php';

Route::get('/company',[CompanyDashboard::class,'companyindex']);
Route::get('/addemp',[CompanyDashboard::class,'empadd']);
Route::post('/addemp',[CompanyDashboard::class,'empdata']);
Route::get('/loginemp',[CompanyDashboard::class,'emplogin']);
Route::post('/loginemp',[CompanyDashboard::class,'verifylogin']);
Route::get('/student',[StudentController::class,'studentindex']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
?>