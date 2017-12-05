<?php

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
use App\Employee;
use Illuminate\Http\Request;

Route::get('/', function () {
    $employees = Employee::orderBy('created_at', 'asc')->get();
    return view('employee', [
        'employees' => $employees
    ]);
});

// Add a new employee
Route::post('/employee', function (Request $request){
    $employee = new Employee;
    $employee->fname = $request->fname;
    $employee->lname = $request->lname;
    $employee->job = $request->job;
    $employee->income = $request->income;
    $employee->save();

    return redirect('/');
});

