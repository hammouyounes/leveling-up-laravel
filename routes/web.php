<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return view('welcome');
});

// 2. Route avec réponse texte
Route::get('/hello', function(){
    return 'Bonjour laravel';
});


// 3. Route avec JSON
Route::get('/api/user', function(){
    return Response()->json([
        'name'=>'younes',
        'role'=>'developer',
        'country'=>'Morocco',
    ]);
});

// 4. Route avec redirection

Route::get('/home', function(){
    return redirect('/');
});



// 5. Route avec nom
Route::get('/dashboard', function(){
    return 'Dashboard';
})->name('dashboard');


// 6. Route avec paramètre obligatoire
Route::get('/user/{id}', function($id){
    return "Utilisateur ID : $id";
});


// 7. Route avec paramètre optionnel
Route::get('/post/{id?}', function($id){
    return $id ? "Post avec ID : $id" : "Tous les posts";
});


// 8. Route avec contrainte (regex)
Route::get('/article/{id}', function($id){
    return "Article numero : $id";
})->where('id', '[0-9]+');


// 9. Route avec plusieurs paramètres
Route::get('/blog/{category}/{slug}', function($category,$slug){
    return "category : $category - Slug : $slug";
});


// 10. Route avec contraintes multiples
Route::get('/product/{name}/{id}',function($name,$id){
    return "Produit : $name ($id)";
})->where(['name'=>'[a-z]+', 'id'=>'[0-9]+']);




