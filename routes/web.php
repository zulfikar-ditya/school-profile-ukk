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
        Route::post('message/{id}/read', [AdminController::class, 'readMessage'])->name('message.read');
        Route::resources([
            'blog' => BlogController::class,
            'success-story' => SuccessStoryController::class,
            'message' => MessageController::class,
            'extracurricular' => ExtracurricularController::class,
            'learning-oportunity' => LearningOportunityController::class,
            'learning-process' => LearningProcessController::class,
            'facility' => FacilityController::class,
            'program' => ProgramController::class,
            'slider' => Sliderontroller::class,
            'about-us' => AboutUsController::class,
            'quote' => QuoteController::class,
            'why-us' => WhyUsController::class,
        ]);
        // superuser
        Route::middleware(['role:superuser'])->group(function () {
            Route::resources([
                'blog-category' => BlogCategoryController::class,
                'school-information' => SchoolInformationController::class,
                'user' => UserController::class,
            ]);
        });
        // superuser
    });
    // admin
});
