<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Categorias;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DetalleVentas;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
Route::get('/crear-admin',[AuthController::class,'crearAdmin']);
Route::get('/',[AuthController::class,'index'])->name('login');

Route::post('/logear',[AuthController::class,'logear'])->name('logear');

Route::middleware("auth")->middleware('auth')->group(function(){
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home',[Dashboard::class,'index'])->name('home');
});


Route::prefix('ventas')->middleware('auth')->group(function(){
Route::get('/nueva-venta', [Ventas::class,'index'])->name('ventas-nueva');
});

Route::prefix('detalle_ventas')->middleware('auth')->group(function(){
    Route::get('/detalle_venta', [DetalleVentas::class,'index'])->name('detalle_venta');
    });

Route::prefix('categorias')->middleware('auth')->group(function(){
Route::get('/nueva_categoria', [Categorias::class,'index'])->name('nueva_categoria');
Route::get('/create',[Categorias::class,'create'])->name('categorias.create');
Route::post('/store',[Categorias::class,'store'])->name('categorias.store');

Route::get('/show/{id}',[Categorias::class,'show'])->name('categorias.show');
Route::delete('/destroy/{id}',[Categorias::class,'destroy'])->name('categorias.destroy');

Route::get('/edit/{id}', [Categorias::class, 'edit'])->name('categorias.edit');
Route::put('/update/{id}', [Categorias::class, 'update'])->name('categorias.update');

});

Route::prefix('productos')->middleware('auth')->group(function () {
    Route::get('/nuevos_productos', [Productos::class, 'index'])->name('nuevos_productos');
    Route::get('/create', [Productos::class, 'create'])->name('productos.create');
    Route::post('/store', [Productos::class, 'store'])->name('nuevo_producto');
    Route::get('/edit/{id}', [Productos::class, 'edit'])->name('productos.edit');
    Route::put('/update/{id}', [Productos::class, 'update'])->name('productos.update');
    Route::get('/show/{id}', [Productos::class, 'show'])->name('productos.show');
    Route::delete('/destroy/{id}', [Productos::class, 'destroy'])->name('productos.destroy');
});

Route::prefix('usuarios')->middleware('auth')->group(function(){
    
    Route::get('/nuevo_usuario', [Usuarios::class,'index'])->name('nuevo_usuario');
    Route::get('/create', [Usuarios::class, 'create'])->name('usuarios.create');
    Route::post('/store', [Usuarios::class, 'store'])->name('usuarios.store');
    Route::get('/edit/{id}', [Usuarios::class, 'edit'])->name('usuarios.edit');
    Route::put('/update/{id}', [Usuarios::class, 'update'])->name('usuarios.update');
    Route::get('/tbody', [Usuarios::class, 'tbody'])->name('usuarios.tbody');
    Route::get('/cambiar-estado/{id}/{estado}', [Usuarios::class, 'estado'])->name('usuarios.estado');
    Route::get('/cambiar-password/{id}/{password}', [Usuarios::class, 'cambio_password'])->name('usuarios.password');
    
});


Route::prefix('clientes')->middleware('auth')->group(function(){

Route::get('/nuevos_clientes', [Clientes::class,'index'])->name('nuevos_clientes');
Route::get('/create',[Clientes::class,'create'])->name('clientes.create');
Route::post('/store',[Clientes::class,'store'])->name('nuevo_cliente');
Route::get('/edit/{id}', [Clientes::class, 'edit'])->name('clientes.edit');
Route::put('/update/{id}', [Clientes::class, 'update'])->name('clientes.update');
Route::get('/show/{id}', [Clientes::class, 'show'])->name('clientes.show');
Route::delete('/destroy/{id}', [Clientes::class, 'destroy'])->name('clientes.destroy');


});


Route::prefix('clientes')->middleware('auth')->group(function(){
Route::get('/nuevos_usuarios', [Usuarios::class,'index'])->name('nuevos_usuarios');
});
