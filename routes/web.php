<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieHabibeController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\FournisseursController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');


/*
 * Site web
 * */
Route::get('/', [HomeController::class,'index'])->name('home');

/*
 * Administration
 * */
Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
Route::get('commerciaux',[CommercialController::class,'index'])->name('commerciaux.index');
Route::get('commerciaux/add',[CommercialController::class,'add_commercial'])->name('commerciaux.add');
Route::post('commerciaux',[CommercialController::class,'store'])->name('commerciaux.store');
Route::get('commerciaux/{id}', [CommercialController::class,'show'])->name('commerciaux.show');
Route::get('commerciaux/edit/{id}', [CommercialController::class,'edit'])->name('commerciaux.edit');
Route::put('commerciaux/edit/{id}', [CommercialController::class,'update'])->name('commerciaux.update');

Route::resource('fournisseur',FournisseursController::class);
Route::resource('produits',ProduitsController::class);
Route::resource('categorie_habibe',CategorieHabibeController::class);