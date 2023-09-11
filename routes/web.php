<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('home')->as('home.')->controller(HomeController::class)->group(function(){
    Route::get('index', [HomeController::class,'index'])->name('index');
    Route::get('home', [HomeController::class,'dash'])->name('home');
    Route::get('action-plan', [HomeController::class,'actionplan'])->name('action-plan');
    Route::get('action-progress', [HomeController::class,'actionprogress'])->name('action-progress');
    Route::get('todo-list', [HomeController::class,'todolist'])->name('todo-list');
    Route::get('todo-progress', [HomeController::class,'todoprogress'])->name('todo-progress');
    Route::get('project-upload', [HomeController::class,'projectUpload'])->name('project-upload');
    Route::get('project', [HomeController::class,'project'])->name('project');
    Route::get('project-progress', [HomeController::class,'projectProgress'])->name('project-progress');
    Route::get('project-list', [HomeController::class,'projectList'])->name('project-list');
    Route::get('project-detail', [HomeController::class,'projectDetail'])->name('project-detail');
    Route::get('work-progress', [HomeController::class,'workProgress'])->name('work-progress');
    Route::get('dashboard', [HomeController::class,'dashboard'])->name('dashboard');
    Route::get('office', [HomeController::class,'office'])->name('office');
    

    });
require __DIR__.'/auth.php';
