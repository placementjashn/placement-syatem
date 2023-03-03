<?php
use App\Http\Controllers\CompanyDashboard;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpprofileController;
use App\Http\Controllers\postController;


=======
use App\Http\Controllers\StudentController;
>>>>>>> 5886d1baa4daf85cba795085b5f687c80898f98e
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');

});
=======
>>>>>>> 5886d1baa4daf85cba795085b5f687c80898f98e

Route::get('/company',[CompanyDashboard::class,'companyindex']);
Route::get('/addemp',[CompanyDashboard::class,'empadd']);
Route::post('/addemp',[CompanyDashboard::class,'empdata']);
Route::get('/loginemp',[CompanyDashboard::class,'emplogin']);
Route::post('/loginemp',[CompanyDashboard::class,'verifylogin']);
Route::get('/student',[StudentController::class,'studentindex']);




<<<<<<< HEAD
/* Route::get('/logins',function(){
    /* session()->put('email',1);  
    return redirect('/');  
}); */
Route::get('/logout',function(){
    session()->forget('email'); 
    return redirect('/loginemp');  

=======
Route::get('/', function () {
    return view('welcome');
>>>>>>> 5886d1baa4daf85cba795085b5f687c80898f98e
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD

});

//session
/* Route::get('loginemp',function()
{
    $session =session()->all();
    p($session);
=======
>>>>>>> 5886d1baa4daf85cba795085b5f687c80898f98e
});

require __DIR__.'/auth.php';
<<<<<<< HEAD


=======
>>>>>>> 5886d1baa4daf85cba795085b5f687c80898f98e
