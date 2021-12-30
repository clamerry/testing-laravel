<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPortofolioController;
use App\Http\Controllers\PortofolioController; 

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
    return view('home', [
        "title" => "Home"
    ]);
});

//routing ke halaman home
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

//routing ke halaman about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Clamerry",
        "email" => "isengaja114@gmail.com",
        "image" => "ren.jpg"
    ]);
});

//routing ke halaman portofolio
Route::get('/portofolio', [PortofolioController::class, 'index']);

//routing ke halaman portofolio spesifik
Route::get('portofolio/{porto:slug}', [PortofolioController::class, 'show']);

//routing ke halaman kategori
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Portofolio Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

//routing ke halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//routing ke halaman logout
Route::post('/logout', [LoginController::class, 'logout']);

//routing ke halaman dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

//routing untuk slug di add portofolio
Route::get('/dashboard/portofolios/checkSlug', [DashboardPortofolioController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/portofolios', DashboardPortofolioController::class)->middleware('auth');