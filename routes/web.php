<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\{DashboardController, DistributionController, TahfidzHouseController, AdminControlller, InfoController, BatchController ,ExportController};
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'storeLogin'])->name('store.login');
    // Route::get('register', [AuthController::class, 'register'])->name('register');
    // Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/distribution',DistributionController::class);
    Route::get('/export', [ExportController::class, 'export'])->name('export');
    Route::resource('/tahfidzhouse',TahfidzHouseController::class);
    // Route::resource('/admin',AdminControlller::class);
    Route::resource('/batch',BatchController::class);
    Route::get('/info', [InfoController::class, 'index'])->name('info');

    // Auth
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

