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

//Tampilan awal website: Halaman Login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);

//routing ke halaman home
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

// routing ke halaman about
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

//sidebar routing
//routing ke halaman experiences
Route::get('/dashboard/experiences', function() {
    return view('dashboard/experiences.index');
})->middleware('auth');

//routing ke halaman projects
Route::get('/dashboard/projects', function() {
    return view('dashboard/projects.index');
})->middleware('auth');

//routing ke halaman achievements
Route::get('/dashboard/achievements', function() {
    return view('dashboard/achievements.index');
})->middleware('auth');

//routing ke halaman kelola mahasiswa
Route::get('/dashboard/mahasiswa', function() {
    return view('dashboard/mahasiswa.index');
})->middleware('auth');

//routing ke halaman tampilkan portofolio
Route::get('/dashboard/generate', function() {
    return view('dashboard/generate.index');
})->middleware('auth');

//routing ke halaman logout
Route::post('/logout', [LoginController::class, 'logout']);

//routing ke halaman dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

//routing ke halaman Profile
Route::get('/dashboard/profiles', function() {
    return view('dashboard.profiles.about');
})->middleware('auth');

//routing untuk slug di add portofolio
Route::get('/dashboard/portofolios/checkSlug', [DashboardPortofolioController::class, 'checkSlug'])->middleware('auth');

//routing sidebar dashboard
Route::resource('/dashboard/portofolios', DashboardPortofolioController::class)->middleware('auth');

// Route::get('/dashboard/mahasiswa', function() {
//     return view('dashboard.mahasiswa.index');
// })->middleware('auth');

//routing ke halaman sesuai role
Route::get('/dashboard_admin', function () { return view('dashboard_admin.index'); })->middleware('checkRole:admin');
// Route::get('/dashboard_mhs', function () { return view('dashboard_mhs.index'); })->middleware(['checkRole:mahasiswa,admin']);