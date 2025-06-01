<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/update', [ProductController::class, 'update']);
Route::get('/register', [ProductController::class, 'register']);

Route::get('/', [ProductController::class, 'index']);
Route::post('/products/search', [ProductController::class, 'search']);
Route::get('/products/sort', [ProductController::class, 'sort']);
Route::get('/products/{id}/update', [ProductController::class, 'detail']);
Route::post('/products/{id}/update', [ProductController::class, 'update']);
Route::get('/softdelete/{id}', [ProductController::class, 'softdelete']);
Route::get('/products/register', [ProductController::class, 'register']);
Route::post('/products/register', [ProductController::class, 'create']);
