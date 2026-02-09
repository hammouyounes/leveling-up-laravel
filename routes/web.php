<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use League\Uri\Http;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/post', function(){
        return 'posts';
    });

    Route::prefix('posts')->name('posts.')->group(function(){
        Route::get('/', function(){
            return view('posts');
        });

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
});