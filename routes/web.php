<?php

use App\Http\Controllers\admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    // admin
    Route::middleware(['role:superuser|admin'])->namespace('\App\Http\Controllers\admin')->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        // superuser
        Route::middleware(['role:superuser'])->group(function () {
            Route::resources([
                'blog-category' => BlogCategoryController::class,
                'blog' => BlogController::class,
                'success-story' => SuccessStoryController::class,
                'extracurricular' => ExtracurricularController::class,
                'facility' => FacilityController::class,
                'learning-oportunity' => LearningOportunityController::class,
                'program' => ProgramController::class,
                'slider' => Sliderontroller::class,
                'learning-process' => LearningProcessController::class,
            ]);
        });
        // superuser
    });
    // admin
});
