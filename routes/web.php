<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ListContactController;
use App\Http\Controllers\ListGroupController;
use App\Http\Controllers\ListIndividualController;
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

// primary pages
Route::get('/', function () {
    return view('pages.home');
})->name("home");

Route::get('/me-contacter', function () {
    return view('pages.contact');
})->name("contact");

Route::get('/la-sophrologie', function () {
    return view('pages.lasophrologie');
})->name("lasophrologie");

Route::get('/qui-suis-je', function () {
    return view('pages.quisuisje');
})->name("quisuisje");

Route::get('/rdv', function () {
    return view('pages.rdv');
})->name("rdv");

Route::get('/tarif', function () {
    return view('pages.tarif');
})->name("tarif");

Route::get('/blog', [BlogController::class, 'index'])->name("blog");
Route::resource ('blogs', BlogController::class);

Route::get('/listContact', [ListContactController::class, 'index'])->name("listContact");
Route::resource('listcontacts', ListContactController::class);

Route::get('/listIndividual', [ListIndividualController::class, 'index'])->name("listIndividual");
Route::resource('listindividuals', ListIndividualController::class);

Route::get('/listGroup', [ListGroupController::class, 'index'])->name("listGroup");
Route::resource('listgroups', ListGroupController::class);

// secondary pages 
Route::get('/secondary/onesession', function () {
    return view('pages.secondary.onesession');
})->name("onesession");

Route::get('/secondary/groupsophro', function () {
    return view('pages.secondary.groupsophro');
})->name("groupsophro");

Route::get('/secondary/individualsophro', function () {
    return view('pages.secondary.individualsophro');
})->name("individualsophro");

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
