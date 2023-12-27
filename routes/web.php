<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectListing;
use App\Http\Controllers\UserController;

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
Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
	], function(){ 
/*		
		Route::get('/', function () {
			return view('welcome');
	});
	*/
	// Homepage
Route::get('/', [ProjectListing::class, 'home']);
// List projects by meta 
Route::get('/projects/search//', [ProjectListing::class, 'filter']);

// Projects main
Route::get('/projects//', [ProjectListing::class, 'index']);

// Create New User
Route::post('/users', [UserController::class, 'store']);
// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

	});
	
	/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/