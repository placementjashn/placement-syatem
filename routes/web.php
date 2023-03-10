<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpprofileController;
use App\Http\Controllers\postController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserAuth;

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
<<<<<<< HEAD
=======

>>>>>>> 94bd75ff3e13c553f34f9fb7ff690b15f3231007
Route::get('/addemployee',[EmployeeController::class,'empadd']) ;//employee
Route::get('/addemployee',[EmployeeController::class,'empadd']) ;//employee
Route::get('/addemployee',[EmployeeController::class,'empadd']);//employee
Route::post('/addemployee',[EmployeeController::class,'empdata']);//employee
Route::get('/loginemp',[EmployeeController::class,'emplogin']);//employee
Route::post('/loginemp',[EmployeeController::class,'verifylogin']);//employee

Route::get('/employeedashborad',[postController::class,'index'])->middleware('guard');//employee dashboard
/* Route::get('/company/dashboard',[EmployeeController::class,'company']); *///company dashboard

Route::get('/addpost',[postController::class,'addpost'])->middleware('guard');//post open addpost page
Route::post('/addpost',[postController::class,'store'])->middleware('guard');//post store the data
Route::get('/view',[postController::class,'view'])->middleware('guard');//post view the data
 
Route::get('/delete/{job_id}',[postController::class,'delete'])->name('delete')->middleware('guard');//post delete
Route::get('/edit/{job_id}',[postController::class,'edit'])->name('edit')->middleware('guard');//post edit
Route::post('/update/{job_id}',[postController::class,'update'])->name('update')->middleware('guard');//post update

Route::get('/no-access',function(){ 
    return "You're not access to the page";
    die; 
});//route middleware

Route::get('/companydata',[CompanyController::class,'companylist']);

/* Route::get('/logins',function(){
    /* session()->put('email',1);  
    return redirect('/');  
}); */
Route::get('/logout',function(){
    session()->forget('email'); 
    return redirect('/company/dashboard');  
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/company/dashboard', /* function () {
    return view('company.dashboard'); */[EmployeeController::class,'company']
)->middleware(['auth:company', 'verified'])->name('company.dashboard');

//student
Route::get('/companystudlist',[StudentController::class,'display']);


/* Route::get('/delete/{job_id}',[postController::class,'delete'])->name('delete')->middleware('guard');//post delete */
/* 
Route::get('/company/dashboard', function () {
    return view('company.dashboard');
})->middleware(['auth:company', 'verified'])->name('company.dashboard');
 */require __DIR__.'/companyauth.php';
/* Route::get('/company/dashboard', function () {
    return view('company.dashboard');
})->middleware(['auth:company', 'verified'])->name('company.dashboard');//company dashboard
require __DIR__.'/companyauth.php'; */

Route::get('/company/dashboard', /* function () {
    return view('company.dashboard'); */[EmployeeController::class,'company']
)->middleware(['auth:company', 'verified'])->name('company.dashboard');
require __DIR__.'/companyauth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//session
/* Route::get('loginemp',function()
{
    $session =session()->all();
    p($session);
});

 Route::get('set-session',function(Request $request)
{
    $request->session()->all();
    return redirect('loginemp');
});
 */
/*
Route::get('destroy-session',function(){
 session()->forget(['empname','empid']);
 return redirect('get-all-session');
}); */
require __DIR__.'/auth.php'; 