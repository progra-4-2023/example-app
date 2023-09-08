<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PrimerController;
#Route::any('/mi-primer-controller', [PrimerController::class, 'index']);
Route::get('/mi-primer-controller/{texto?}', [PrimerController::class, 'show'])
    ->where(['texto' => '[a-z0-9-]+'])
    ->name('mi-controller');
;

Route::redirect('/here', '/mi-primer-controller/fui-redirigido');

use App\Http\Controllers\ContactoController;
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');


