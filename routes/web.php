<?php

use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\MemberController as AdminMemberController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploadImageController;
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

Route::get('/home', function () {
    return view('/admin/home');
})->name('Home');
Route::get('/company', function () {
    return view('/admin/company');
})->name('Company');
Route::get('/members', function () {
    return view('/admin/members');
})->name('Members');
Route::get('/projets', function () {
    return view('/admin/projects');
})->name('Projets');
Route::get('/reviews', function () {
    return view('/admin/reviews');
})->name('Reviews');
Route::get('/service', function () {
    return view('/admin/service');
})->name('Services');
Route::get('/social_links', function () {
    return view('/admin/social_links');
})->name('Social Links');
Route::get('/log_in', function () {
    return view('/admin/sign_in');
})->name('log_in');
Route::get('/profile', function () {
    return view('/admin/profile');
})->name('profile');
Route::get('/about', function ()
{
    return view('about');
})->name('about');
Route::resources([
    'services' => ServiceController::class,
    'team' => MemberController::class,
    'members' => AdminMemberController::class,
    'masterServices' => AdminServiceController::class,
    'projects' => ProjectController::class,
    'reviews' => ReviewController::class,
    'companies' => CompanyController::class,
]);
/*--- Admin area's routes ---*/
Route::get('/master/home', [HomeController::class, 'index'])->name('Dashboard');
Route::post('/upload-image', UploadImageController::class);
