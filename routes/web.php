<?php

use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\MemberController as AdminMemberController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\admin\SignInController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('/admin/sign_in');
})->name('login');
Route::post('login', [SignInController::class, 'Login'])->name('login');
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function ()
{
    return view('about');
})->name('about');
Route::get('/contact',function ()
{
    return view('contact');
})->name('contact');
// to protect this routes from unauthenticated users:
Route::middleware('auth')->group(function (){
    Route::resources([
        'services' => ServiceController::class,
        'team' => MemberController::class,
        'members' => AdminMemberController::class,
        'masterServices' => AdminServiceController::class,
        'projects' => ProjectController::class,
        'reviews' => ReviewController::class,
        'companies' => CompanyController::class,
        'users' => UserController::class,
    ]);
    Route::get('/acceuil', function () {
        return view('/admin/company_information');
    })->name('acceuil');
    Route::get('logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
    Route::get('/master/home', [AdminHomeController::class, 'index'])->name('Dashboard');
});
