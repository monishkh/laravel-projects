<?php
use  Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/users', [UserController::class, 'allUsers'])->name('User.AllUser');
Route::get('/create-user', [UserController::class, 'create'])->name('User.CreateUser');
Route::post('/create', [UserController::class, 'store'])->name('User.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('User.Edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('User.Update');
Route::delete('/user/{user}/delete', [UserController::class, 'delete'])->name('User.Delete');