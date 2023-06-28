<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Carros\Carros;
use App\Http\Livewire\Admin\Carros\CarrosForm;

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
Route::get('/carros/inserir', CarrosForm::class);
Route::get('/carros/{carro}/editar', CarrosForm::class);

// Route::get('/carros', function () {
//     return view('admin.carros');
// });
