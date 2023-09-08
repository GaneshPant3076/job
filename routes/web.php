<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    Route::resource('admin/job','\App\Http\Controllers\Admin\JobController');

    Route::resource('admin/blog','\App\Http\Controllers\Admin\BlogController');

});

// Route::get('/',[\App\Http\Controllers\Front\HomeController::class, 'index']);

Route::get('/job/search',[\App\Http\Controllers\Front\JobController::class, 'index']);

Route::get('/job/detail/{id}',[\App\Http\Controllers\Front\JobController::class, 'show']);

Route::get('/contact',[\App\Http\Controllers\Front\ContactController::class, 'store']);

Route::get('/blog/search',[\App\Http\Controllers\Front\BlogController::class,'index']);

Route::get('/blog/detail/{id}',[\App\Http\Controllers\Front\BlogController::class,'show']);

Route::get('/signup',[\App\Http\Controllers\Front\SignupController::class, 'index']);

Route::get('/login',[\App\Http\Controllers\Front\LoginController::class, 'index']);

Route::post('/comment',[\App\Http\Controllers\Front\CommentController::class, 'store']);



require __DIR__.'/auth.php';
