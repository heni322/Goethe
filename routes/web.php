<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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
    return view('website.index');
})->name('website.index');
Route::get('/about', function () {
    return view('website.about');
})->name('website.about');
Route::get('/contact', function () {
    return view('website.contact');
})->name('website.contact');
Route::get('/courses', function () {
    return view('website.courses');
})->name('website.courses');
Route::get('/courses/langue', function () {
    return view('website.formation.langue');
})->name('website.langue');
Route::get('/courses/sante', function () {
    return view('website.formation.sante');
})->name('website.sante');
Route::get('/courses/informatique', function () {
    return view('website.formation.info');
})->name('website.info');
Route::get('/courses/marketing', function () {
    return view('website.formation.marketing');
})->name('website.marketing');
Route::get('/courses/architecture', function () {
    return view('website.formation.architecture');
})->name('website.architecture');
Route::get('/courses/infographie', function () {
    return view('website.formation.infographie');
})->name('website.infographie');
Route::get('/courses/comptabilitie', function () {
    return view('website.formation.comptabilitie');
})->name('website.comptabilitie');
Route::get('/courses/electrique', function () {
    return view('website.formation.electrique');
})->name('website.electrique');
Route::get('/courses/mecanique', function () {
    return view('website.formation.mecanique');
})->name('website.mecanique');
Route::get('/courses/tourisme', function () {
    return view('website.formation.tourisme');
})->name('website.tourisme');
Route::get('/jobs', [WebsiteController::class, 'index'])->name('website.jobs');
Route::post('/jobs', [WebsiteController::class, 'store'])->name('website.store');
// Route::get('/jobs/load-more', [WebsiteController::class, 'loadMore'])->name('website.jobs');
Route::get('/jobs/more/{offset}', [WebsiteController::class, 'loadMoreJobs'])->name('jobs.more');

Route::get('/jobsWeb', [WebsiteController::class, 'indexWeb'])->name('website.jobsWeb');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/morejob', App\Http\Livewire\JobListing::class)
    ->name('jobs.listing');

// Route::post('/applyCrud/create', [ApplyController::class, 'store'])->name('applys.store');



// Route::resource('jobsCrud', JobsController::class);

// Route::get('/', function () {
//     return view('website.index');
// })->name('website.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('/jobsCrud', JobsController::class);
    Route::get('/applyCrud', [ApplyController::class, 'index'])->name('applys.index');
});
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
