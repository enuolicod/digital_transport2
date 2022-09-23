<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbordController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('',function(){return view('authentification');});
Route::get('/', [dashbordController::class, 'login']);

Route::get('/dashbord', [dashbordController::class, 'index']);
Route::get('/charts', [dashbordController::class, 'chart']);
Route::get('/reservation', [dashbordController::class, 'reservation']);
Route::get('/colies', [dashbordController::class, 'colie']);
Route::get('/courriers', [dashbordController::class, 'courrier']);
Route::get('/recuperationDB',[dashbordController::class,'recuperation']);
Route::post('/dashbord', [dashbordController::class, 'enregistrer'])->name('enregistrement');
Route::post('/colies', [dashbordController::class, 'enregistrer_colis'])->name('enregistrement_colis');
Route::post('/courriers', [dashbordController::class, 'enregistrer_courriers'])->name('enregistrement_courriers');
Route::get('delete/{id}', [dashbordController::class, 'supprimer']);
Route::get('deletecolis/{id}', [dashbordController::class, 'supprimer_colis']);
Route::get('deletecourrier/{id}', [dashbordController::class, 'supprimer_courriers']);
Route::get('edit/{id}', [dashbordController::class, 'editer']);
Route::get('editcolis/{id}', [dashbordController::class, 'editercolis']);
Route::get('editcourriers/{id}', [dashbordController::class, 'editercourriers']);
Route::put('update_data/{id}', [dashbordController::class, 'ajour']);
Route::put('updatecolis_data/{id}', [dashbordController::class, 'ajourcolis']);
Route::put('updatecourriers_data/{id}', [dashbordController::class, 'ajourcourriers']);
// Route::get('/dashboard', [acceuilcontrolleur::class, 'dashboard']);
Route::post('/login-user', [dashbordController::class, 'loginuser'])->name('login-user');



