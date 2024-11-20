<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\AttorneyDetailController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\CaseStudyDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PracticeAreaController;
use App\Http\Controllers\PracticeAreaDetailController;
use Illuminate\Auth\Events\Login;

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

Route::get('/login', [LoginController::class, 'login'])->name('admin.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/attorney',[AttorneyController::class,'attorney'])->name('attorney');
Route::get('/attorney-detail',[AttorneyDetailController::class, 'attorney_detail'])->name('attorney_detail');
Route::get('/blog',[BlogController::class, 'blog'])->name('blog');
Route::get('/blog-post',[BlogPostController::class, 'blog_post' ])->name('blog_post');
Route::get('/case-study',[CaseStudyController::class, 'case_study' ])->name('case_study');
Route::get('/case-study-detal',[CaseStudyDetailController::class, 'case_study_detail'])->name('case_study_detail');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::get('/practice-area',[PracticeAreaController::class, 'practice_area' ])->name('practice_area');
Route::get('/practice-area-detail',[PracticeAreaDetailController::class, 'practice_area_detail'])->name('practice_area_detail');
Route::resource('/home-admin', HomeAdminController::class);

Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::resource('/home-admin', HomeAdminController::class,'home-admin.index');

});
