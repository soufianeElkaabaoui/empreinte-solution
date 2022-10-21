<?php

use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\MemberController as AdminMemberController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\admin\SignInController;
use App\Http\Controllers\admin\SocialLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index']);
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
    'social-links' => SocialLinkController::class,
]);
/*--- Admin area's routes ---*/
Route::get('/master/home', [AdminHomeController::class, 'index'])->name('Dashboard');
Route::get('/contact',function ()
{
    return view('contact');
})->name('contact');
Route::post('login', [SignInController::class, 'Login'])->name('login');
