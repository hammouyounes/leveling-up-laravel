<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use League\Uri\Http;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->where('id', '[0-9]+')->name('index');;

        Route::get('/create' , [ProductController::class, 'create'])->name('create');
        
        Route::post('/create', [ProductController::class, 'store'])->name('store');});

        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');

        Route::delete('/{id}/delete', [ProductController::class, 'destroy'])->name('destroy');


});
    Route::prefix('posts')->name('posts.')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->where('id', '[0-9]+')->name('posts.index');;

        Route::get('/create', function(){
            return view('createPost');
        });
        
        Route::post('/create',function(Request $request){
            return "Données reçues: " . $request->input('name');
        });

        Route::get('/{id}/edit', function($id,Request $request){
            return view('createPost');
        });

    });