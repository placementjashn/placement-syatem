<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpprofileController;
use App\Http\Controllers\postController;
use App\Http\Controllers\Companyauth\RatingController;
use App\Http\Controllers\frontend\HomeCssController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentCss\StudentCssController;
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

Route::get('/',[HomeCssController::class,'index']);//admincss

Route::get('/stud',[StudentCssController::class,'index'])->name('studentCss.studentcss');//studentcss
Route::get('/about',[StudentCssController::class,'about']);
Route::get('/services',[StudentCssController::class,'services']);

Route::get('/sdetail',[StudentCssController::class,'sdetail']);
Route::get('/blog',[StudentCssController::class,'blog']);
Route::get('/bdetail',[StudentCssController::class,'bdetail']);
Route::get('/projects',[StudentCssController::class,'projects']);
Route::get('/contact',[StudentCssController::class,'contact']);


/* Route::get('/', function () {
    return view('welcome');
}); */


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

Route::get('/joblist/{company_id}',[postController::class,'joblist'])->name('joblist'); //Open Job List

Route::get('/compare',[CompanyController::class,'compare']);//compare company 
Route::get('/compare/{company_id}',[CompanyController::class,'records'])->name('compare');//Record display
Route::get('/companydata',[CompanyController::class,'companylist']);

//Compare list
Route::post('/comparelist/module/store',[CompanyController::class,'storecomparelist'])->name('storecomparelist');
Route::post('/comparelist/module/remove',[CompanyController::class,'removecomparelist'])->name('removecomparelist');
Route::post('/comparelist/module/showcomparelist',[CompanyController::class,'showcomparelist'])->name('showcomparelist');

//Applyed for Company by student
Route::get('/appliedCompanyStudentList/{company_id}',[CompanyController::class,'applied']);
Route::post('/appliedCompanyStudentList',[CompanyController::class,'applieddata']);
Route::get('/appliedstudview',[CompanyController::class,'view']);
Route::get('/cancleapply/{applied_id}',[CompanyController::class,'cancleappliedjob']);

//Rating & Review 
Route::get('/rating',[RatingController::class,'rating']);
Route::get('/company/rating/status',[RatingController::class,'updateRatingStatus'])->name('company.rating.status');
Route::get('/addrating',[RatingController::class,'ratingform']);
Route::post('/ratingsuccess',[RatingController::class,'ratingdata']);

Route::get('/studlogout',function(){
    Auth::guard('web')->logout();
    return redirect('/');
});

//on-off
Route::get('/status/update',[StudentController::class,'updateStatus'])->name('users.update.status');
Route::get('/no-access',function(){ 
    return "You're not access to the page";
    die(); 
});//route middleware

/* Route::get('/logins',function(){
    /* session()->put('email',1);  
    return redirect('/');  
}); */

Route::get('/logout',function(){
    session()->forget('email'); 
    return redirect('/');  
});

Route::get('/dashboard', /* function () {
    return view('dashboard'); */[StudentController::class,'student']
)->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';


Route::get('/company/dashboard', /* function () {
    return view('company.dashboard'); */[EmployeeController::class,'company']
)->middleware(['auth:company', 'verified'])->name('company.dashboard');

//student display in company dashborad
Route::get('/companystudlist',[CompanyController::class,'display']);

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



/* Route::get('/company',[CompanyDashboard::class,'companyindex']);
Route::get('/addemp',[CompanyDashboard::class,'empadd']);
Route::post('/addemp',[CompanyDashboard::class,'empdata']);
Route::get('/loginemp',[CompanyDashboard::class,'emplogin']);
Route::post('/loginemp',[CompanyDashboard::class,'verifylogin']); */
Route::get('/student',[StudentController::class,'studentindex']);


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
?> 