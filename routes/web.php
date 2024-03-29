<?php

use App\Http\Controllers\PublicController;
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
Route::get('/', [PublicController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('backend.home');
})->middleware(['auth'])->name('home');

Route::resource('products', ProductController::class);
// Route::resource('slider', SliderController::class);

Route::get('/form', function () {
    return view('backend.form');
})->name('form');

require __DIR__ . '/auth.php';