<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AddExperiencesController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPortofolioController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestController;
use App\Models\Project;

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

Route::get('/test', [TestController::class, 'index']);

//Tampilan awal website: Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::group([
    // 'prefix'=> 'mahasiswa',
    // 'as'=>'mahasiswa',
    // 'namespace'=>'Mahasiswa',
    'middleware' => 'auth', 'checkRole:mahasiswa'
], function() {
    //resource untuk handle method post+action = method store [form create]
    route::resource('/mahasiswa/experiences', ExperienceController::class);
    route::resource('/mahasiswa/projects', ProjectController::class);
    route::resource('/mahasiswa/achievements', AchievementController::class);
    route::resource('/dashboard/portofolios', DashboardPortofolioController::class);
    //get(index), get(create), post(store), get(edit ($id)), put(update ($id)), get(show($id)), delete(destroy ($id))

});

Route::group([
    // 'prefix'=> 'admin',
    // 'as'=>'admin',
    // 'namespace'=>'Admin',
    'middleware' => 'auth', 'checkRole:admin'
], function() {
    //resource untuk handle method post+action = method store [form create]
    route::resource('/admin/mhs', MhsController::class);
    //get(index), get(create), post(store), get(edit ($id)), put(update ($id)), get(show($id)), delete(destroy ($id))

});

//routing halaman logout
Route::post('/logout', [LoginController::class, 'logout']);

//routing ke halaman dashboard
Route::get('/dashboard', function() {
    return view('lte.dashboard');
})->middleware('auth');

//routing ke halaman dashboard
Route::get('/dashboard_admin', function() {
    return view('admin.dashboard');
})->middleware('auth');

//routing ke halaman daftar mahasiswa
// Route::get('/admin/daftar_mhs', function() {
//     return view('admin.mhs.index');
// })->middleware('auth');


Route::get('/mahasiswa', function() {
    return view('mahasiswa.dashboard');
})->middleware('auth');

Route::get('/admin/daftar_mhs', function() {
    return view('admin.mhs.index');
})->middleware('auth');

Route::get('/testing', function() {
    return view('lte.test');
})->middleware('auth');