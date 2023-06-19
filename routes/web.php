<?php

use App\Http\Controllers\actualiteController;
use App\Http\Controllers\chefComposantesController;
use App\Http\Controllers\chefDepartementsController;
use App\Http\Controllers\composanteController;
use App\Http\Controllers\departementController;
use App\Http\Controllers\evenementsController;
use App\Http\Controllers\flash_infoController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\NosLiens;
use App\Http\Controllers\partenaireController;
use App\Http\Controllers\projetController;
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



// Route::get('/formations', [NosLiens::class, 'formations']);
Route::get('admissions', [NosLiens::class, 'admission']);
Route::get('/inscriptions', [NosLiens::class, 'inscription']);

Route::get('/cooperative', [NosLiens::class, 'cooperative']);
Route::get('/mutuelle', [NosLiens::class, 'mutuelle']);
Route::get('/bibliotheque', [NosLiens::class, 'bibliotheque']);
Route::get('/oeuvre', [NosLiens::class, 'oeuvre']);

// Route::get('/partenariats', [NosLiens::class, 'partenariat']);

Route::get('/recherche', [NosLiens::class, 'rechereche'])->name('recherche');
Route::get('/contact', [NosLiens::class, 'contact']);

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[homeController::class,'index']);
Route::resource('/actualites',actualiteController::class);
Route::resource('/composantes',composanteController::class);
Route::resource('/chefComposantes',chefComposantesController::class);
Route::resource('/chefDepartements',chefDepartementsController::class);
Route::resource('/formations',formationController::class);
Route::resource('/partenaires',partenaireController::class);
Route::resource('/projets',projetController::class);
Route::resource('/evenements',evenementsController::class);
Route::resource('/flash_info',flash_infoController::class);

// Route::resource('/edite-depart',departementController::class, 'edite');

require __DIR__ . '/admin.php';




