<?php

use App\Http\Controllers\API\KaryawanController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\JabatanController;
use App\Http\Controllers\API\LevelController;
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

Route::get('jabatan', [JabatanController::class, 'index']);
Route::post('jabatan/store', [JabatanController::class, 'store']);
Route::get('jabatan/show/{id}', [JabatanController::class, 'show']);
Route::post('jabatan/update/{id}', [JabatanController::class, 'update']);
Route::get('jabatan/destroy/{id}', [JabatanController::class, 'destroy']);

Route::get('level', [LevelController::class, 'index']);
Route::post('level/store', [LevelController::class, 'store']);
Route::get('level/show/{id}', [LevelController::class, 'show']);
Route::post('level/update/{id}', [LevelController::class, 'update']);
Route::get('level/destroy/{id}', [LevelController::class, 'destroy']);

Route::get('department', [DepartmentController::class, 'index']);
Route::post('department/store', [DepartmentController::class, 'store']);
Route::get('department/show/{id}', [DepartmentController::class, 'show']);
Route::post('department/update/{id}', [DepartmentController::class, 'update']);
Route::get('department/destroy/{id}', [DepartmentController::class, 'destroy']);

Route::get('karyawan', [KaryawanController::class, 'index']);
Route::post('karyawan/store', [KaryawanController::class, 'store']);
Route::get('karyawan/show/{id}', [KaryawanController::class, 'show']);
Route::post('karyawan/update/{id}', [KaryawanController::class, 'update']);
Route::get('karyawan/destroy/{id}', [KaryawanController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
