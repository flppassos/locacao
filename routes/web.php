<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Carros\Carros;

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
    return view('inicial');
});

Route::get('/carros', Carros::class);

// Route::get('/carros', function () {
//     return view('admin.carros');
// });
