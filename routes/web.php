<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\MemberController as AdminMemberController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function ()
{
    return view('about');
})->name('about');
Route::resources([
    'services' => ServiceController::class,
    'team' => MemberController::class,
    'members' => AdminMemberController::class,
]);
/*--- Admin area's routes ---*/
Route::get('/master/home', [HomeController::class, 'index']);

