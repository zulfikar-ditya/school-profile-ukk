<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontend\FrontendController;
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

Route::name('home.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/blog', [FrontendController::class, 'blogs'])->name('blogs');
    Route::get('/blog/category/{id}', [FrontendController::class, 'blogsByCategory'])->name('blogs.category');
    Route::get('/blog/{id}/{slug}', [FrontendController::class, 'blog'])->name('blog');
    Route::get('/program', [FrontendController::class, 'programs'])->name('programs');
    Route::get('/program/{id}/{title}', [FrontendController::class, 'program'])->name('program');
    Route::get('/message', [FrontendController::class, 'message'])->name('message');
    Route::post('/message', [FrontendController::class, 'storeMessage'])->name('message.store');
    Route::get('/success-story', [FrontendController::class, 'successStories'])->name('success-stories');
    Route::get('/success-story/{id}/{name}', [FrontendController::class, 'successStory'])->name('success-story');
    Route::get('/vission-mission', [FrontendController::class, 'vissionMission'])->name('vission-mission');
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
