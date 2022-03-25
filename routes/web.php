<?php

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
    return view('welcome');
});
// Creation de compte et login
Route::get('/login', [App\Http\Controllers\UserAuthController::class, 'login'])->name('login');
Route::post('/check', [App\Http\Controllers\UserAuthController::class, 'check'])->name('auth.check');

Route::get('/admin/compte', [App\Http\Controllers\UserAuthController::class, 'register'])->name('compte');
Route::post('/admin/create', [App\Http\Controllers\UserAuthController::class, 'create'])->name('auth.create');
Route::get('/admin', [App\Http\Controllers\UserAuthController::class, 'admin'])->name('espace_admin');



Route::get('/', [App\Http\Controllers\AdminController::class, 'accueil'])->name('accueil');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('espace_admin');
Route::get('/profil', [App\Http\Controllers\AdminController::class, 'profil'])->name('espace_etudiant');

Route::resource('professeur', ProfesseurController::class);
Route::get('/admin/professeur', [App\Http\Controllers\ProfesseurController::class, 'index'])->name('liste_professeur');
Route::delete('/admin/professeur/{professeur}/force', ['\App\Http\Controllers\ProfesseurController', 'forceDestroy'])
    ->name('professeur.force-destroy');
Route::put('/admin/professeur/{professeur}/restore', ['\App\Http\Controllers\ProfesseurController', 'restore'])
    ->name('professeur.restore');

Route::resource('filiere', FiliereController::class);
Route::get('/admin/filiere', [App\Http\Controllers\FiliereController::class, 'index'])->name('liste_filiere');
Route::delete('/admin/filiere/{filiere}/force', ['\App\Http\Controllers\FiliereController', 'forceDestroy'])
    ->name('filiere.force-destroy');
Route::put('/admin/filiere/{filiere}/restore', ['\App\Http\Controllers\FiliereController', 'restore'])
    ->name('filiere.restore');

Route::resource('niveau', NiveauController::class);
Route::get('/admin/grade', [App\Http\Controllers\NiveauController::class, 'index'])->name('liste_niveau');
Route::delete('/admin/grade/{niveau}/force', ['\App\Http\Controllers\NiveauController', 'forceDestroy'])
    ->name('niveau.force-destroy');
Route::put('/admin/grade/{niveau}/restore', ['\App\Http\Controllers\NiveauController', 'restore'])
    ->name('niveau.restore');

Route::resource('etudiant', StudentController::class);
Route::get('/admin/etudiant', [App\Http\Controllers\StudentController::class, 'index'])->name('liste_etudiant');
Route::delete('/admin/etudiant/{etudiant}/force', ['\App\Http\Controllers\StudentController', 'forceDestroy'])
    ->name('etudiant.force-destroy');
Route::put('/admin/etudiant/{etudiant}/restore', ['\App\Http\Controllers\StudentController', 'restore'])
    ->name('etudiant.restore');
