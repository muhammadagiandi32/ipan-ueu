<?php

use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\bill\BillController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\student\StudentController;
use App\Models\Bill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/test', function (Request $request) {
    // $data = DB::table('bills')
    //     ->leftJoin('students', 'bills.students_id', '=', 'students.id_students')
    //     ->leftJoin('users', 'students.user_id', '=', 'users.id')
    //     ->where('users.id', '=', Auth::user()->id)
    //     ->get();
    // DB::enableQueryLog();
    return response()->json($request);
    // dd(DB::getQueryLog());
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Student
Route::resource('student', StudentController::class);

// Bill
Route::resource('bill', BillController::class)->middleware(['role', 'auth']);

// administrator
Route::resource('administrator', AdministratorController::class);

Route::resource('payment', PaymentController::class);
