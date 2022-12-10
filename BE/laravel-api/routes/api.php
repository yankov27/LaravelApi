<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//взимаме цялата таблица
Route::get('employees', [EmployeeController::class, 'getEmployee']);

//взимаме определен employee
Route::get('employee/{id}', [EmployeeController::class, 'getEmployeeById']);

//записваме на таблицата
Route::post('addEmployee', [EmployeeController::class, 'addEmployee']);

//променяме запис
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

//изтриваме
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);