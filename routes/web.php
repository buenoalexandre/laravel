<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProdutosController;

Route::get('/', [HomeController::class,'index']);
Route::get('/produtos', [ProdutosController::class,'index']); // Método Get
Route::post('/produtos', [ProdutosController::class,'index']); // Método Post


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

/*
Route::get('/', function () {
    return view('welcome');
 });

Route::get('/', function () {
    echo "pagina inicial";
});

Route::get('/produtos', function () {
    echo "pagina produtos";
});
*/

// Route::get('/', function () {
//     return view('home');
// });


// Route::view('/', 'home');
// //Route::view('/produto', 'produto');

// route::get('/produto/{nomeProduto}/comentarios/{id}', function ($nomeProduto, $id) {
//     echo "Este é o comentário " . $id . " do produto " . $nomeProduto;
// });

// Route::get('/', 'HomeController@index'); versão antiga
