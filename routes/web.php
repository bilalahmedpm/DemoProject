<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\BankController;
use App\Http\Controllers\Backend\BranchController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get ('/admin/logout' , [AdminController::class , 'Logout'])->name('admin.logout');


// User Managment All Routes Group

Route :: prefix('users')->group(function(){

Route::get ('/view' , [UserController::class, 'UserView'])->name('user.view');
Route::get ('/add' , [UserController::class, 'UserAdd'])->name('user.add');
Route::post ('/store' , [UserController::class, 'UserStore'])->name('user.store');
Route::get('/Edit/{id}' , [UserController::class, 'UserEdit'])->name('user.edit');
Route::post('/Update/{id}' , [UserController::class, 'UserUpdate'])->name('user.update');
Route::get('/Delete/{id}' , [UserController::class, 'UserDelete'])->name('user.delete');

});
//These are employee routes
Route :: prefix('Employee')->group(function(){
    Route::get('/View' , [EmployeeController::class ,'EmployeeView'])->name('employee.view');
    Route::get('/Add' , [EmployeeController::class ,'index'])->name('employee.add');
    Route::post('/Store' , [EmployeeController::class ,'EmployeeStore'])->name('employee.store');
    

    });


// Route::get ('/insertemployee' , [employeecontroller::class ,'insertemployee']);
// Route::post('/getbankbranch' , [employeecontroller::class , 'getbankbranch']);

//These are Bank routes
Route::post('/getbankbranch' , [EmployeeController::class , 'getbankbranch']);
// Route::resource('/banks' ,BankController::class);
// Route::resource ('/bankbranches' ,BranchController::class);

Route :: prefix('Bank')->group(function(){

    Route::get ('/View' , [BankController::class, 'BankView'])->name('bank.view');
    Route::get ('/Add' , [BankController::class, 'BankAdd'])->name('bank.add');
    Route::post ('/Store' , [BankController::class, 'BankStore'])->name('bank.store');
    Route::get('/Edit/{id}' , [BankController::class, 'BankEdit'])->name('bank.edit');
    Route::post('/Update/{id}' , [BankController::class, 'BankUpdate'])->name('bank.update');
    Route::get('/Delete/{id}' , [BankController::class, 'BankDelete'])->name('bank.delete');
 
    });
    Route :: prefix('/Bank/Branch')->group(function(){

    Route::get ('/View' , [BranchController::class, 'BankBranchView'])->name('bank.branch.view');
    Route::get ('/Add' , [BranchController::class, 'BankBranchAdd'])->name('bank.branch.add');
    Route::post ('/Store' , [BranchController::class, 'BankBranchStore'])->name('bank.branch.store');
    // Route::get('/Edit/{id}' , [BranchController::class, 'BankBranchEdit'])->name('bank.branch.edit');
    // Route::post('/Update/{id}' , [BranchController::class, 'BankBranchUpdate'])->name('bank.branch.update');
    // Route::get('/Delete/{id}' , [BranchController::class, 'BankBranchDelete'])->name('bank.branch.delete');
     
       });
       
    Route :: prefix('/Reports')->group(function(){
    Route::get('/ShowReport', [BankController::class, 'BankWiseReport'])->name('show.report');
    Route::get('/DownloadPDF',[BankController::class, 'downloadpdf'])->name('bankbranches.report');
    });
    






