<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->where('id', '[0-9]+')->name('index');;

        Route::get('/create' , [ProductController::class, 'create'])->name('create');
        
        Route::post('/create', [ProductController::class, 'store'])->name('store');
        
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

    Route::prefix('contacts')->name('contacts.')->group(function(){
        Route::get('/', [ContactsController::class, 'create'])->name('contact.create');
        Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');
    });
});

require __DIR__.'/auth.php';
