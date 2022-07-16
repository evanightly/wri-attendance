<?php

use App\Models\Presence;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PresenceController;

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

Route::get('/user', fn () => view('user.dashboard'));
Route::get('/user/edit-profil', fn () => view('user.edit_profil'));
Route::get('/user/input_absensi', fn () => view('user.input_absensi'));

Route::get('/kadiv', fn () => view('kadiv.dashboard'));
Route::get('/kadiv/edit-profil', fn () => view('kadiv.edit_profil'));

Route::get('/admin/add-user', fn () => view('admin.add_user'));
Route::get('/admin/edit-profil', fn () => view('admin.edit_profil'));

Route::resource('/presence', PresenceController::class);
