<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/test-database", function () {
    try {
        DB::connection()->getPdo();
        echo "Successfully connected to the database!";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e);
    }
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{uuid}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{uuid}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{uuid}', [MahasiswaController::class, 'destroy']);
