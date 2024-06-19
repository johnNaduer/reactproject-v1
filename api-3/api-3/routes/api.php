<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductController;

// Ruta para listar productos
Route::get('v1/product', [ProductController::class, 'index']);

// Ruta para crear un nuevo producto
Route::post('v1/product', [ProductController::class, 'store']);

// Ruta para mostrar un producto específico
Route::get('v1/product/{id}', [ProductController::class, 'show']);

// Ruta para actualizar un producto específico
Route::put('v1/product/{id}', [ProductController::class, 'update']);
Route::post('v1/product/{id}', [ProductController::class, 'update']); // Si necesitas un post

// Ruta para eliminar un producto específico
Route::delete('v1/product/{id}', [ProductController::class, 'destroy']);


/*
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(
    function () {
        Route::resource('product', 'Api\V1\ProductController');
        Route::post('product/{id}', 'Api\V1\ProductController@update');
        Route::delete('product/{id}', 'Api\V1\ProductController@destroy');
        
    }
);

*/