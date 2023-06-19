<?php

use App\Http\Controllers\actualiteController;
use App\Http\Controllers\composanteController;
use App\Http\Controllers\chefComposantesController;
use App\Http\Controllers\evenementsController;
use App\Http\Controllers\flash_infoController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\NosLiens;
use App\Http\Controllers\partenaireController;
use App\Http\Controllers\projetController;
use Illuminate\Support\Facades\Route;

Route::get("admin/accueil",[homeController::class,'accueil'])->name("accueil");

Route::get("admin/add_user",[homeController::class,'add_user'])->name("add_user");
Route::get("admin/show_user",[homeController::class,'show_user'])->name("show_user");


Route::get("admin/add_composante",[composanteController::class,'add_composante'])->name("add_composante");
Route::get("admin/add_chef_composante",[composanteController::class,'add_chef_composante'])->name("add_chef_composante");
Route::get("admin/show_composante",[composanteController::class,'show_composante'])->name("show_composante");
Route::get("admin/detail_comp/{id}",[composanteController::class,'detail_comp'])->name("detail_comp");
Route::get("admin/edit_chef_composante",[chefComposantesController::class,'edite_chef_composante'])->name("edite_chef_composante");
// Route::get("admin/delete_chef_composante",[chefComposantesController::class,'delete_chef_composante'])->name("delete_chef_composante");
Route::post("admin/store_chef_composante",[composanteController::class,'store_chef_composante'])->name("store_chef_composante");


Route::get("admin/add_departement",[formationController::class,'add_departement'])->name("add_departement");
Route::get("admin/add_chef_departement",[formationController::class,'add_chef_departement'])->name("add_chef_departement");
Route::get("admin/show_departement",[formationController::class,'show_departement'])->name("show_departement");
Route::post("admin/store_chef_departement",[formationController::class,'store_chef_departement'])->name("store_chef_departement");
Route::get("admin/delete_chef_departement/{id}",[formationController::class,'delete_chef_departement'])->name("delete_chef_departement");

Route::get("admin/add_actualite",[actualiteController::class,'add_actualite'])->name("add_actualite");
Route::get("admin/show_actualite",[actualiteController::class,'show_actualite'])->name("show_actualite");
Route::get("admin/delete_actualite/{id}",[actualiteController::class,'delete_actualite'])->name("delete_actualite");

Route::get("admin/add_event",[evenementsController::class,'add_event'])->name("add_event");
Route::get("admin/show_event",[evenementsController::class,'show_event'])->name("show_event");
Route::get("admin/edite_event",[evenementsController::class,'edite_event'])->name("edite_event");

Route::get("admin/add_projet",[projetController::class,'add_projet'])->name("add_projet");
Route::get("admin/show_projet",[projetController::class,'show_projet'])->name("show_projet");

Route::get("admin/delete_projet/{id}",[projetController::class,'delete_projet'])->name("delete_projet");


Route::get("admin/add_partner",[partenaireController::class,'add_partner'])->name("add_partner");
Route::get("admin/show_partner",[partenaireController::class,'show_partner'])->name("show_partner");

Route::get("admin/add_flash_info",[flash_infoController::class,'add_flash_info'])->name("add_flash_info");
Route::get("admin/show_flash_info",[flash_infoController::class,'show_flash_info'])->name("show_flash_info");






